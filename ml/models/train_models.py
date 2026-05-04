"""
ML Pipeline v2 — données enrichies + features mieux corrélées aux labels
"""
import pandas as pd
import numpy as np
import joblib, json, warnings, os
warnings.filterwarnings('ignore')

from sklearn.model_selection import train_test_split, cross_val_score
from sklearn.preprocessing   import StandardScaler
from sklearn.pipeline        import Pipeline
from sklearn.ensemble        import RandomForestClassifier, GradientBoostingRegressor, RandomForestRegressor
from sklearn.metrics         import (classification_report, accuracy_score,
                                     mean_absolute_error, r2_score)

# ⭐ CORRECTION — chemins relatifs dynamiques (Windows + Linux)
BASE_DIR   = os.path.dirname(os.path.abspath(__file__))   # dossier du script
MODELS_DIR = os.path.join(BASE_DIR, "..", "models")       # ml/models/
DATA_DIR   = os.path.join(BASE_DIR, "..", "data")         # ml/data/
os.makedirs(MODELS_DIR, exist_ok=True)
os.makedirs(DATA_DIR,   exist_ok=True)

np.random.seed(42)

# ─── GÉNÉRER DES DONNÉES AVEC DU BRUIT RÉALISTE ──────────────────────────────
N = 800
montant      = np.random.uniform(200, 6000, N).round(2)
duree        = np.random.choice([3,6,9,12,18,24], N)
wallet_solde = np.random.uniform(100, 10000, N).round(2)
nb_contrib   = np.random.randint(0, 30, N)
avg_contrib  = np.where(nb_contrib > 0,
                         np.random.uniform(20, 500, N).round(2), 0.0)
total_contrib = (nb_contrib * avg_contrib).clip(0, montant).round(2)
pct           = (total_contrib / montant * 100).round(2)
freq_mois     = np.where(nb_contrib > 0,
                          np.random.uniform(0.1, 4, N).round(4), 0.0)
jours_debut   = np.random.randint(10, 900, N)
jours_sans    = np.random.randint(0, 200, N)
reste         = (montant - total_contrib).round(2)
ratio_solde   = (wallet_solde / montant).round(4)

# ── Label 1 : atteint (classification) — corrélé à pct + fréquence + solde ──
noise_c  = np.random.normal(0, 8, N)
score_c  = (pct * 0.6
            + freq_mois * 8
            + (jours_sans < 14).astype(float) * 10
            + (wallet_solde > montant).astype(float) * 8
            - (reste / montant) * 20
            + noise_c)
atteint  = (score_c > 38).astype(int)

# ── Label 2 : % final prédit (régression) — pct + tendance contributions ──
noise_r      = np.random.normal(0, 5, N)
pct_predit   = (pct * 0.65
                + freq_mois * 6
                + (jours_sans < 7) * 8
                + noise_r).clip(0, 100).round(2)

# ── Label 3 : jours restants ─────────────────────────────────────────────────
vitesse      = np.where(freq_mois > 0, avg_contrib * freq_mois / 30, 0.001)
jours_restants = np.where(
    atteint == 1, 0.0,
    (reste / vitesse).clip(0, 730)
) + np.random.normal(0, 20, N)
jours_restants = jours_restants.clip(0, 730).round(1)

df = pd.DataFrame({
    "montant_cible":       montant,
    "duree_mois":          duree,
    "wallet_solde":        wallet_solde,
    "total_contributions": total_contrib,
    "nb_contributions":    nb_contrib,
    "pct_progres":         pct,
    "avg_contrib":         avg_contrib,
    "freq_contrib_mois":   freq_mois,
    "jours_depuis_debut":  jours_debut,
    "jours_sans_contrib":  jours_sans,
    "reste_a_atteindre":   reste,
    "ratio_solde_cible":   ratio_solde,
    "atteint":             atteint,
    "pct_final_predit":    pct_predit,
    "jours_restants":      jours_restants,
})

# ⭐ CORRECTION — CSV sauvegardé dans ml/data/
CSV_PATH = os.path.join(DATA_DIR, "objectifs_data_v2.csv")
df.to_csv(CSV_PATH, index=False)
print(f"Dataset v2 : {len(df)} lignes | Atteints : {atteint.sum()} ({atteint.mean()*100:.1f}%)")
print(f"CSV sauvegardé : {os.path.abspath(CSV_PATH)}")

FEATURES = [
    "montant_cible","duree_mois","wallet_solde","total_contributions",
    "nb_contributions","pct_progres","avg_contrib","freq_contrib_mois",
    "jours_depuis_debut","jours_sans_contrib","reste_a_atteindre","ratio_solde_cible",
]
X = df[FEATURES]

# ── Split ──────────────────────────────────────────────────────────────────
X_tr, X_te, yc_tr, yc_te = train_test_split(X, df["atteint"],        test_size=0.2, random_state=42, stratify=df["atteint"])
_,    _,    yr_tr, yr_te = train_test_split(X, df["pct_final_predit"],test_size=0.2, random_state=42)
_,    _,    yd_tr, yd_te = train_test_split(X, df["jours_restants"],  test_size=0.2, random_state=42)

# ══════════════════════════════════════════════════════
# MODÈLE 1 — CLASSIFICATION
# ══════════════════════════════════════════════════════
print("\n" + "="*55)
print("MODÈLE 1 — CLASSIFICATION (Atteint oui/non)")
print("="*55)
clf = Pipeline([
    ("sc",  StandardScaler()),
    ("clf", RandomForestClassifier(n_estimators=300, max_depth=8,
                                    min_samples_leaf=4, random_state=42,
                                    class_weight="balanced"))
])
clf.fit(X_tr, yc_tr)
yc_pred = clf.predict(X_te)
acc = accuracy_score(yc_te, yc_pred)
cv  = cross_val_score(clf, X, df["atteint"], cv=5, scoring="accuracy")
print(f"Accuracy       : {acc*100:.2f}%")
print(f"Cross-val mean : {cv.mean()*100:.2f}% ± {cv.std()*100:.2f}%")
print(classification_report(yc_te, yc_pred, target_names=["Non atteint","Atteint"]))
fi1 = pd.Series(clf.named_steps["clf"].feature_importances_, index=FEATURES).sort_values(ascending=False)
print("Top features :\n", fi1.head(5).to_string())

# ⭐ CORRECTION — joblib.dump avec chemin relatif dynamique
joblib.dump(clf, os.path.join(MODELS_DIR, "objectif_classifier.pkl"))

# ══════════════════════════════════════════════════════
# MODÈLE 2 — RÉGRESSION % progression
# ══════════════════════════════════════════════════════
print("\n" + "="*55)
print("MODÈLE 2 — RÉGRESSION (% prédit)")
print("="*55)
reg = Pipeline([
    ("sc",  StandardScaler()),
    ("reg", GradientBoostingRegressor(n_estimators=300, max_depth=4,
                                       learning_rate=0.06, subsample=0.8,
                                       random_state=42))
])
reg.fit(X_tr, yr_tr)
yr_pred = reg.predict(X_te).clip(0, 100)
mae = mean_absolute_error(yr_te, yr_pred)
r2  = r2_score(yr_te, yr_pred)
print(f"MAE : {mae:.2f}%  |  R² : {r2:.4f}")
fi2 = pd.Series(reg.named_steps["reg"].feature_importances_, index=FEATURES).sort_values(ascending=False)
print("Top features :\n", fi2.head(5).to_string())

# ⭐ CORRECTION
joblib.dump(reg, os.path.join(MODELS_DIR, "objectif_regressor.pkl"))

# ══════════════════════════════════════════════════════
# MODÈLE 3 — PRÉDICTION jours restants
# ══════════════════════════════════════════════════════
print("\n" + "="*55)
print("MODÈLE 3 — PRÉDICTION (Jours restants)")
print("="*55)
days = Pipeline([
    ("sc",  StandardScaler()),
    ("reg", RandomForestRegressor(n_estimators=300, max_depth=10,
                                   min_samples_leaf=3, random_state=42))
])
days.fit(X_tr, yd_tr)
yd_pred = days.predict(X_te).clip(0, 730)
mae_d = mean_absolute_error(yd_te, yd_pred)
r2_d  = r2_score(yd_te, yd_pred)
print(f"MAE : {mae_d:.1f} jours  |  R² : {r2_d:.4f}")

# ⭐ CORRECTION
joblib.dump(days, os.path.join(MODELS_DIR, "objectif_days_predictor.pkl"))

# ── Métadonnées ───────────────────────────────────────
meta = {
    "features": FEATURES,
    "models":   {"classifier": "objectif_classifier.pkl",
                 "regressor":  "objectif_regressor.pkl",
                 "days":       "objectif_days_predictor.pkl"},
    "metrics":  {"accuracy": round(acc,4), "cv_mean": round(cv.mean(),4),
                 "reg_mae": round(mae,2),  "reg_r2": round(r2,4),
                 "days_mae": round(mae_d,1), "days_r2": round(r2_d,4)},
    "n_samples": len(df),
    "trained_at": pd.Timestamp.now().isoformat(),
}

# ⭐ CORRECTION
META_PATH = os.path.join(MODELS_DIR, "meta.json")
json.dump(meta, open(META_PATH, "w"), indent=2)

print("\n" + "="*55)
print("RÉSUMÉ")
print("="*55)
print(f"  Accuracy classification : {acc*100:.1f}%")
print(f"  MAE régression %        : {mae:.2f}%")
print(f"  MAE jours restants      : {mae_d:.1f} jours")
print(f"  R² régression           : {r2:.4f}")
print(f"  R² jours                : {r2_d:.4f}")
print(f"  Modèles sauvegardés dans : {os.path.abspath(MODELS_DIR)}")