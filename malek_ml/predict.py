# predict.py — Called by Symfony to get prediction

import sys
import json
import pickle
import numpy as np
import scipy.sparse as sp
import os

def predict_category(description, amount, transaction_type='debit'):
    
    # Get the directory where predict.py is located
    script_dir = os.path.dirname(os.path.abspath(__file__))
    
    # Load models from same folder as predict.py
    model_path = os.path.join(script_dir, 'budget_model.pkl')
    vectorizer_path = os.path.join(script_dir, 'budget_vectorizer.pkl')
    encoder_path = os.path.join(script_dir, 'budget_encoder.pkl')

    with open(model_path, 'rb') as f:
        model = pickle.load(f)
    with open(vectorizer_path, 'rb') as f:
        vectorizer = pickle.load(f)
    with open(encoder_path, 'rb') as f:
        le = pickle.load(f)

    # Prepare features
    text = vectorizer.transform([description])
    amt = np.array([[float(amount)]])
    typ = np.array([[1 if transaction_type == 'debit' else 0]])
    features = sp.hstack([text, amt, typ])

    # Predict
    pred = model.predict(features)
    proba = model.predict_proba(features).max()
    category = le.inverse_transform(pred)[0]

    # Return JSON
    result = {
        'category': category,
        'confidence': round(float(proba) * 100, 1)
    }
    print(json.dumps(result))

if __name__ == '__main__':
    description = sys.argv[1] if len(sys.argv) > 1 else ''
    amount = sys.argv[2] if len(sys.argv) > 2 else '0'
    t_type = sys.argv[3] if len(sys.argv) > 3 else 'debit'
    predict_category(description, amount, t_type)