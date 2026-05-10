"""
MLService — Service Python complet pour prédictions objectifs financiers.
Peut être appelé depuis Symfony via un endpoint Python (Flask) ou CLI.

Usage standalone :
  python ml_service.py predict '{\"montant_cible\":500,...}'
  python ml_service.py predict-file "C:/tmp/ml_input.json"
  python ml_service.py server
"""
import sys, json, os
import numpy as np
import joblib
import warnings
warnings.filterwarnings('ignore')

MODEL_DIR = os.path.join(os.path.dirname(os.path.abspath(__file__)), "..", "models")

# ─── CHARGEMENT DES MODÈLES ───────────────────────────────────────────────────
class MLService:
    def __init__(self, model_dir: str = MODEL_DIR):
        self.model_dir = model_dir
        self._load_models()

    def _load_models(self):
        meta_path = os.path.join(self.model_dir, "meta.json")
        with open(meta_path) as f:
            self.meta = json.load(f)
        self.features = self.meta["features"]

        self.clf  = joblib.load(os.path.join(self.model_dir, "objectif_classifier.pkl"))
        self.reg  = joblib.load(os.path.join(self.model_dir, "objectif_regressor.pkl"))
        self.days = joblib.load(os.path.join(self.model_dir, "objectif_days_predictor.pkl"))
        print("[MLService] Modèles chargés avec succès.")

    def _build_input(self, data: dict) -> np.ndarray:
        montant      = float(data.get("montant_cible",       0))
        total_c      = float(data.get("total_contributions", 0))
        nb_c         = int(data.get("nb_contributions",      0))
        wallet_solde = float(data.get("wallet_solde",        0))

        pct   = round((total_c / montant * 100), 2) if montant > 0 else 0.0
        avg_c = round(total_c / nb_c, 2) if nb_c > 0 else 0.0
        reste = round(montant - total_c, 2)
        ratio = round(wallet_solde / montant, 4) if montant > 0 else 0.0

        row = [
            montant,
            float(data.get("duree_mois",         12)),
            wallet_solde,
            total_c,
            float(nb_c),
            pct,
            avg_c,
            float(data.get("freq_contrib_mois",   0.0)),
            float(data.get("jours_depuis_debut",  0)),
            float(data.get("jours_sans_contrib",  0)),
            reste,
            ratio,
        ]
        return np.array(row).reshape(1, -1)

    def predict(self, objectif_data: dict) -> dict:
        X = self._build_input(objectif_data)

        proba        = float(self.clf.predict_proba(X)[0][1])
        va_atteindre = bool(self.clf.predict(X)[0])
        pct_prevu    = float(self.reg.predict(X)[0].clip(0, 100))
        pct_actuel = round((float(objectif_data.get("total_contributions", 0)) 
             / float(objectif_data.get("montant_cible", 1))) * 100, 2)
        pct_prevu  = max(pct_prevu, pct_actuel) 

        # ✅ CALCUL RÉEL des jours restants (pas le modèle ML)
        duree_mois   = int(objectif_data.get("duree_mois", 12))
        jours_depuis = int(objectif_data.get("jours_depuis_debut", 0))
        duree_jours  = duree_mois * 30
        jours_rest   = max(0, duree_jours - jours_depuis)

        from datetime import datetime, timedelta
        date_fin = (datetime.now() + timedelta(days=jours_rest)).strftime("%Y-%m-%d")

        if proba >= 0.75:
            niveau = "FAIBLE"
        elif proba >= 0.45:
            niveau = "MOYEN"
        else:
            niveau = "ÉLEVÉ"

        jours_sans = int(objectif_data.get("jours_sans_contrib", 0))
        freq       = float(objectif_data.get("freq_contrib_mois", 0))
        reste      = float(objectif_data.get("montant_cible", 0)) - float(objectif_data.get("total_contributions", 0))
        wallet     = float(objectif_data.get("wallet_solde", 0))

        if va_atteindre:
            if jours_sans > 14:
                reco = f"Vous êtes sur la bonne voie ! Reprenez les contributions — {jours_sans} jours sans activité."
            elif freq < 1:
                reco = "Augmentez la fréquence de vos contributions pour finir plus tôt."
            else:
                reco = f"Excellent rythme ! Objectif estimé dans {jours_rest} jours."
        else:
            if wallet < reste:
                reco = f"Solde insuffisant ({wallet:.2f}) pour couvrir le reste ({reste:.2f}). Rechargez votre wallet."
            elif freq == 0:
                reco = "Aucune contribution détectée. Commencez dès maintenant pour rattraper le retard."
            else:
                reco = "Risque élevé. Doublez votre fréquence de contribution pour rester dans les délais."

        return {
            "va_atteindre":       va_atteindre,
            "probabilite_succes": round(proba, 4),
            "pct_prevu":          round(pct_prevu, 2),
            "jours_restants":     jours_rest,
            "date_fin_estimee":   date_fin,
            "niveau_risque":      niveau,
            "recommandation":     reco,
        }

    def predict_batch(self, objectifs: list) -> list:
        return [self.predict(o) for o in objectifs]

    def info(self) -> dict:
        return self.meta


# ─── MODE CLI ────────────────────────────────────────────────────────────────
if __name__ == "__main__":
    svc = MLService()

    if len(sys.argv) > 1 and sys.argv[1] == "server":
        try:
            from flask import Flask, request, jsonify
            app = Flask(__name__)

            @app.route("/predict", methods=["POST"])
            def predict():
                data = request.get_json()
                return jsonify(svc.predict(data))

            @app.route("/predict/batch", methods=["POST"])
            def predict_batch():
                data = request.get_json()
                return jsonify(svc.predict_batch(data))

            @app.route("/info", methods=["GET"])
            def info():
                return jsonify(svc.info())

            @app.route("/health", methods=["GET"])
            def health():
                return jsonify({"status": "ok"})

            print("[Flask] Serveur démarré sur http://localhost:5000")
            app.run(host="0.0.0.0", port=5000, debug=False)
        except ImportError:
            print("Flask non installé. pip install flask")

    elif len(sys.argv) > 2 and sys.argv[1] == "predict":
        data   = json.loads(sys.argv[2])
        result = svc.predict(data)
        print(json.dumps(result, indent=2, ensure_ascii=False))

    elif len(sys.argv) > 2 and sys.argv[1] == "predict-file":
        with open(sys.argv[2], 'r', encoding='utf-8-sig') as f:
            data = json.load(f)
        result = svc.predict(data)
        print(json.dumps(result, indent=2, ensure_ascii=False))

    else:
        print("\n" + "="*55)
        print("DÉMONSTRATION — 3 profils d'objectifs")
        print("="*55)

        exemples = [
            {
                "label": "Objectif bien en cours (voiture 500€)",
                "montant_cible": 500, "duree_mois": 12,
                "wallet_solde": 800, "total_contributions": 380,
                "nb_contributions": 8, "freq_contrib_mois": 2.0,
                "jours_depuis_debut": 180, "jours_sans_contrib": 3,
            },
            {
                "label": "Objectif en difficulté (voyage 1500€)",
                "montant_cible": 1500, "duree_mois": 6,
                "wallet_solde": 200, "total_contributions": 100,
                "nb_contributions": 2, "freq_contrib_mois": 0.3,
                "jours_depuis_debut": 60, "jours_sans_contrib": 30,
            },
            {
                "label": "Objectif démarré (maison 5000€)",
                "montant_cible": 5000, "duree_mois": 24,
                "wallet_solde": 3000, "total_contributions": 1200,
                "nb_contributions": 12, "freq_contrib_mois": 1.5,
                "jours_depuis_debut": 240, "jours_sans_contrib": 7,
            },
        ]

        for ex in exemples:
            label = ex.pop("label")
            result = svc.predict(ex)
            print(f"\n▶ {label}")
            print(f"  Va atteindre    : {'✓ OUI' if result['va_atteindre'] else '✗ NON'}")
            print(f"  Probabilité     : {result['probabilite_succes']*100:.1f}%")
            print(f"  % prévu         : {result['pct_prevu']:.1f}%")
            print(f"  Jours restants  : {result['jours_restants']} j → {result['date_fin_estimee']}")
            print(f"  Niveau risque   : {result['niveau_risque']}")
            print(f"  Recommandation  : {result['recommandation']}")