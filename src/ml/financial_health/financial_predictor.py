# ML/financial_predictor.py
import sys
import json
import pandas as pd
import numpy as np
from sklearn.ensemble import RandomForestRegressor
from sklearn.preprocessing import StandardScaler
import joblib
import os
import warnings
warnings.filterwarnings('ignore')

BASE_DIR = os.path.dirname(os.path.abspath(__file__))
DATASET_PATH = os.path.join(BASE_DIR, 'gusto_payroll_bc.csv')
MODEL_PATH = os.path.join(BASE_DIR, 'model.pkl')
SCALER_PATH = os.path.join(BASE_DIR, 'scaler.pkl')

def train_model():
    """Entraîne le modèle sur le dataset payroll"""
    
    # Charger le dataset
    df = pd.read_csv(DATASET_PATH)
    
    # Nettoyer et préparer les données
    # Grouper par employé pour avoir des stats mensuelles moyennes
    employee_stats = df.groupby('Employee_ID').agg({
        'Gross_Pay': 'mean',
        'Net_Pay': 'mean',
        'Federal_Tax': 'mean',
        'Provincial_Tax': 'mean',
        'CPP': 'mean',
        'EI': 'mean',
        'Tips': 'sum'
    }).reset_index()
    
    # Calculer des métriques additionnelles
    employee_stats['net_to_gross_ratio'] = (employee_stats['Net_Pay'] / employee_stats['Gross_Pay']) * 100
    employee_stats['tax_rate'] = ((employee_stats['Federal_Tax'] + employee_stats['Provincial_Tax']) / employee_stats['Gross_Pay']) * 100
    employee_stats['cpp_ei_rate'] = ((employee_stats['CPP'] + employee_stats['EI']) / employee_stats['Gross_Pay']) * 100
    employee_stats['tips_ratio'] = (employee_stats['Tips'] / employee_stats['Gross_Pay']) * 100
    
    # Feature engineering pour score de santé financière
    # Plus le net_to_gross_ratio est élevé, mieux c'est
    # Plus le tax_rate est bas, mieux c'est
    # Ou utiliser les données existantes
    
    # Créer un score cible synthétique basé sur les métriques
    # Normaliser les métriques entre 0 et 100
    net_ratio = employee_stats['net_to_gross_ratio']
    tax_rate = employee_stats['tax_rate']
    
    # Score: plus de net et moins de taxes = meilleur score
    # (net_ratio_max ~ 85%, tax_rate_max ~ 20%)
    normalized_net = (net_ratio - net_ratio.min()) / (net_ratio.max() - net_ratio.min()) * 100
    normalized_tax = 100 - ((tax_rate - tax_rate.min()) / (tax_rate.max() - tax_rate.min()) * 100)
    
    employee_stats['health_score'] = (normalized_net * 0.6 + normalized_tax * 0.4).clip(0, 100)
    
    # Features pour l'entraînement
    feature_columns = [
        'Gross_Pay', 'Net_Pay', 'Federal_Tax', 'Provincial_Tax',
        'CPP', 'EI', 'Tips', 'net_to_gross_ratio', 'tax_rate', 'cpp_ei_rate'
    ]
    
    X = employee_stats[feature_columns]
    y = employee_stats['health_score']
    
    # Normaliser
    scaler = StandardScaler()
    X_scaled = scaler.fit_transform(X)
    
    # Modèle
    model = RandomForestRegressor(n_estimators=100, random_state=42)
    model.fit(X_scaled, y)
    
    # Sauvegarder
    joblib.dump(model, MODEL_PATH)
    joblib.dump(scaler, SCALER_PATH)
    
    print(json.dumps({
        'status': 'success',
        'message': f'Model trained on {len(employee_stats)} employees',
        'avg_score': round(y.mean(), 2)
    }))

def predict(user_data):
    """Prédit le score de santé financière"""
    
    if not os.path.exists(MODEL_PATH):
        train_model()
    
    model = joblib.load(MODEL_PATH)
    scaler = joblib.load(SCALER_PATH)
    
    # Calculer les métriques à partir des données utilisateur
    gross_pay = user_data.get('gross_pay', user_data.get('total_balance', 5000))
    net_pay = user_data.get('net_pay', gross_pay * 0.85)  # Estimation
    federal_tax = user_data.get('federal_tax', gross_pay * 0.15)
    provincial_tax = user_data.get('provincial_tax', gross_pay * 0.05)
    cpp = user_data.get('cpp', gross_pay * 0.059)
    ei = user_data.get('ei', gross_pay * 0.016)
    tips = user_data.get('tips', 0)
    
    # Calculer les ratios
    net_to_gross_ratio = (net_pay / gross_pay) * 100 if gross_pay > 0 else 0
    tax_rate = ((federal_tax + provincial_tax) / gross_pay) * 100 if gross_pay > 0 else 0
    cpp_ei_rate = ((cpp + ei) / gross_pay) * 100 if gross_pay > 0 else 0
    
    features = [[
        gross_pay, net_pay, federal_tax, provincial_tax,
        cpp, ei, tips, net_to_gross_ratio, tax_rate, cpp_ei_rate
    ]]
    
    X_scaled = scaler.transform(features)
    predicted_score = model.predict(X_scaled)[0]
    
    current_score = user_data.get('current_score', 0)
    
    # Prédictions futures
    future = []
    for month in [3, 6, 12]:
        improvement = (100 - predicted_score) * (month / 24)
        future_score = min(100, predicted_score + improvement)
        future.append({
            'months': month,
            'score': round(future_score, 1),
            'improvement': round(future_score - predicted_score, 1)
        })
    
    # Recommandations personnalisées
    recommendations = []
    if net_to_gross_ratio < 70:
        recommendations.append({
            'type': 'savings',
            'title': '💪 Improve Your Net-to-Gross Ratio',
            'message': f'Your net income is only {net_to_gross_ratio:.0f}% of gross. Look for tax optimization strategies.',
            'action': 'Consult with a tax advisor or use RRSP/TFSA accounts.'
        })
    
    if cpp_ei_rate > 8:
        recommendations.append({
            'type': 'employment',
            'title': '📊 Consider Self-Employment Options',
            'message': f'You pay {cpp_ei_rate:.0f}% in payroll deductions.',
            'action': 'Research if freelance or contract work could reduce deductions.'
        })
    
    return {
        'current_score': current_score,
        'predicted_score': round(predicted_score, 1),
        'improvement': round(predicted_score - current_score, 1),
        'future_predictions': future,
        'recommendations': recommendations,
        'metrics': {
            'net_to_gross_ratio': round(net_to_gross_ratio, 1),
            'tax_rate': round(tax_rate, 1),
            'cpp_ei_rate': round(cpp_ei_rate, 1)
        },
        'level': get_level(predicted_score)
    }

def get_level(score):
    if score >= 80: return 'Excellent'
    if score >= 60: return 'Good'
    if score >= 40: return 'Average'
    if score >= 20: return 'Poor'
    return 'Critical'

if __name__ == "__main__":
    if '--train' in sys.argv:
        train_model()
    else:
        input_data = sys.stdin.read()
        if input_data.strip():
            data = json.loads(input_data)
            result = predict(data)
            print(json.dumps(result, ensure_ascii=False))
        else:
            # Données de test par défaut
            test_data = {
                'current_score': 50,
                'gross_pay': 5000,
                'net_pay': 4100,
                'federal_tax': 600,
                'provincial_tax': 300,
                'cpp': 295,
                'ei': 80,
                'tips': 100
            }
            result = predict(test_data)
            print(json.dumps(result, ensure_ascii=False))