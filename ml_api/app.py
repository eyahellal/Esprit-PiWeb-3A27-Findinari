# ml_api/app.py
from flask import Flask, request, jsonify
import joblib
import numpy as np
import os

app = Flask(__name__)

# Chargement des modèles UNE SEULE FOIS au démarrage
BASE_DIR = os.path.dirname(__file__)
model      = joblib.load(os.path.join(BASE_DIR, 'model_sentiment_twitter.joblib'))
vectorizer = joblib.load(os.path.join(BASE_DIR, 'vectorizer_twitter.joblib'))

print("✅ Modèles chargés avec succès")

@app.route('/health', methods=['GET'])
def health():
    return jsonify({'status': 'ok'})

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()

    if not data or 'messages' not in data:
        return jsonify({'error': 'Paramètre "messages" manquant'}), 400

    messages = data['messages']
    if not isinstance(messages, list) or len(messages) == 0:
        return jsonify({'error': '"messages" doit être une liste non vide'}), 400

    print(f"📥 Analyzing {len(messages)} messages...")
    for i, msg in enumerate(messages):
        print(f"   [{i+1}] {msg}")

    # Votre logique existante, identique
    X_new        = vectorizer.transform(messages)
    probabilites = model.predict_proba(X_new)[:, 1]
    score_final  = float(probabilites.mean())

    if score_final > 0.65:
        label = 'satisfied'
    elif score_final > 0.40:
        label = 'neutral'
    else:
        label = 'unsatisfied'

    print(f"📤 Prediction: {label} (Score: {score_final:.3f})")

    return jsonify({
        'label': label,
        'score': round(score_final, 3),
        'messages_count': len(messages)
    })

if __name__ == '__main__':
    app.run(host='127.0.0.1', port=5000, debug=False)