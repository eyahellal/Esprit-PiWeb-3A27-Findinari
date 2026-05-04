"""
Génère des données synthétiques réalistes pour Objectif + Contributiongoal
Simule ce qu'on lirait depuis une API Symfony ou une base de données
"""
import pandas as pd
import numpy as np
import json
from datetime import datetime, timedelta
import random

random.seed(42)
np.random.seed(42)

N_OBJECTIFS = 500

def generate_objectifs():
    rows = []
    for i in range(1, N_OBJECTIFS + 1):
        montant      = round(random.uniform(100, 5000), 2)
        duree        = random.choice([3, 6, 9, 12, 18, 24])
        date_debut   = datetime(2022, 1, 1) + timedelta(days=random.randint(0, 700))
        wallet_solde = round(random.uniform(50, 8000), 2)

        # Simuler les contributions
        n_contribs   = random.randint(0, int(duree * 1.5))
        total_contribs = 0
        contribs = []
        for j in range(n_contribs):
            c = round(random.uniform(10, montant * 0.4), 2)
            if total_contribs + c > montant:
                c = round(montant - total_contribs, 2)
            total_contribs = round(total_contribs + c, 2)
            days_offset = random.randint(1, duree * 30)
            contribs.append({
                "montant": c,
                "date": (date_debut + timedelta(days=days_offset)).strftime("%Y-%m-%d")
            })
            if total_contribs >= montant:
                break

        pct             = round((total_contribs / montant) * 100, 2)
        jours_depuis_dc = (datetime.now() - date_debut).days
        # Dernière contribution
        if contribs:
            last_d = max(datetime.strptime(c["date"], "%Y-%m-%d") for c in contribs)
            jours_sans_contrib = (datetime.now() - last_d).days
            avg_contrib = round(total_contribs / len(contribs), 2)
            freq_contrib = round(len(contribs) / max(jours_depuis_dc, 1) * 30, 4)  # par mois
        else:
            jours_sans_contrib = jours_depuis_dc
            avg_contrib        = 0.0
            freq_contrib       = 0.0

        # Label : va-t-il atteindre l'objectif ? (régression : % prédit)
        # Heuristique réaliste
        score = pct
        if freq_contrib > 1:   score += 15
        if jours_sans_contrib < 7:  score += 10
        if wallet_solde > montant:  score += 5
        if duree <= 6:         score -= 5
        score = min(100, max(0, score + random.gauss(0, 8)))

        atteint = 1 if total_contribs >= montant else 0

        rows.append({
            "objectif_id":         i,
            "montant_cible":       montant,
            "duree_mois":          duree,
            "wallet_solde":        wallet_solde,
            "total_contributions": total_contribs,
            "nb_contributions":    len(contribs),
            "pct_progres":         pct,
            "avg_contrib":         avg_contrib,
            "freq_contrib_mois":   freq_contrib,
            "jours_depuis_debut":  jours_depuis_dc,
            "jours_sans_contrib":  jours_sans_contrib,
            "reste_a_atteindre":   round(montant - total_contribs, 2),
            "ratio_solde_cible":   round(wallet_solde / montant, 4),
            # Labels
            "atteint":             atteint,
            "pct_final_predit":    round(score, 2),
        })

    return pd.DataFrame(rows)

df = generate_objectifs()
df.to_csv("/home/claude/objectifs_data.csv", index=False)
print(f"Dataset généré : {len(df)} lignes")
print(df.describe())