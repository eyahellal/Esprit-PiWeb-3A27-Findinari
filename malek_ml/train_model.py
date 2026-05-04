# train_model.py
# Train a category prediction model for Fin-Dinari

import pandas as pd
import numpy as np
import pickle
import warnings
warnings.filterwarnings('ignore')

from sklearn.model_selection import train_test_split
from sklearn.preprocessing import LabelEncoder
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.neighbors import KNeighborsClassifier
from sklearn.tree import DecisionTreeClassifier
from sklearn.metrics import accuracy_score, classification_report
import scipy.sparse as sp
import matplotlib.pyplot as plt

print("=" * 60)
print("   FIN-DINARI — Category Prediction Model Training")
print("=" * 60)

# ================================
# 1. Load Dataset
# ================================
print("\n📂 Loading dataset...")
df = pd.read_csv(r'C:\Users\malek challouf\Downloads\archive\personal_transactions.csv')
print(f"✅ Loaded {df.shape[0]} rows")

# ================================
# 2. Clean Data
# ================================
print("\n🧹 Cleaning data...")
df = df.dropna(subset=['Description', 'Category', 'Amount'])
df = df[~df['Category'].isin(['Credit Card Payment', 'Transfer'])]
df = df[df['Amount'] > 0]

# Remove categories with less than 5 transactions
category_counts = df['Category'].value_counts()
df = df[df['Category'].isin(category_counts[category_counts >= 5].index)]

print(f"✅ After cleaning: {df.shape[0]} rows")
print(f"✅ Categories: {df['Category'].nunique()}")
print("\n📊 Categories:")
print(df['Category'].value_counts())

# ================================
# 3. Map to Fin-Dinari Categories
# ================================
# Map external categories to Fin-Dinari categories
category_mapping = {
    'Groceries': 'Food & Drink',
    'Restaurants': 'Food & Drink',
    'Fast Food': 'Food & Drink',
    'Coffee Shops': 'Food & Drink',
    'Food & Dining': 'Food & Drink',
    'Alcohol & Bars': 'Food & Drink',
    'Gas & Fuel': 'Transport',
    'Auto Insurance': 'Transport',
    'Shopping': 'Shopping',
    'Electronics & Software': 'Shopping',
    'Utilities': 'Housing',
    'Mortgage & Rent': 'Housing',
    'Internet': 'Housing',
    'Mobile Phone': 'Housing',
    'Television': 'Housing',
    'Movies & DVDs': 'Entertainment',
    'Music': 'Entertainment',
    'Home Improvement': 'Housing',
    'Haircut': 'Health',
    'Paycheck': 'Income',
}

df['MappedCategory'] = df['Category'].map(category_mapping).fillna('Other')
print(f"\n✅ Mapped to Fin-Dinari categories:")
print(df['MappedCategory'].value_counts())

# ================================
# 4. Prepare Features
# ================================
print("\n⚙️  Preparing features...")

# Encode labels
le = LabelEncoder()
df['label'] = le.fit_transform(df['MappedCategory'])

# Text features
vectorizer = TfidfVectorizer(
    max_features=300,
    ngram_range=(1, 2),
    stop_words='english'
)
X_text = vectorizer.fit_transform(df['Description'])

# Amount feature
X_amount = df[['Amount']].values

# Type feature
df['type_encoded'] = (df['Transaction Type'] == 'debit').astype(int)
X_type = df[['type_encoded']].values

# Combine
X = sp.hstack([X_text, X_amount, X_type])
y = df['label']

print(f"✅ Feature matrix: {X.shape}")

# ================================
# 5. Split Data
# ================================
X_train, X_test, y_train, y_test = train_test_split(
    X, y,
    test_size=0.2,
    random_state=42
)

print(f"✅ Train: {X_train.shape[0]} | Test: {X_test.shape[0]}")

# ================================
# 6. Train Models
# ================================
print("\n🤖 Training models...")

# Model 1 — KNN
print("   Training KNN...")
knn_model = KNeighborsClassifier(n_neighbors=5, metric='cosine')
knn_model.fit(X_train, y_train)
knn_pred = knn_model.predict(X_test)
knn_accuracy = accuracy_score(y_test, knn_pred)
print(f"   ✅ KNN Accuracy: {knn_accuracy:.2%}")

# Model 2 — Decision Tree
print("   Training Decision Tree...")
dt_model = DecisionTreeClassifier(
    max_depth=10,
    min_samples_split=5,
    random_state=42
)
dt_model.fit(X_train, y_train)
dt_pred = dt_model.predict(X_test)
dt_accuracy = accuracy_score(y_test, dt_pred)
print(f"   ✅ Decision Tree Accuracy: {dt_accuracy:.2%}")

# ================================
# 7. Compare Models
# ================================
print("\n📊 Model Comparison:")
print(f"   KNN:           {knn_accuracy:.2%}")
print(f"   Decision Tree: {dt_accuracy:.2%}")

# Chart
plt.figure(figsize=(8, 5))
models = ['KNN\n(K=5)', 'Decision Tree\n(depth=10)']
accuracies = [knn_accuracy, dt_accuracy]
colors = ['#2CCED2', '#F27438']

bars = plt.bar(models, accuracies, color=colors, width=0.4, edgecolor='white')
plt.ylim(0, 1.15)
plt.title('Model Accuracy Comparison — Fin-Dinari', fontsize=14, fontweight='bold')
plt.ylabel('Accuracy', fontsize=12)

for bar, acc in zip(bars, accuracies):
    plt.text(
        bar.get_x() + bar.get_width() / 2,
        bar.get_height() + 0.02,
        f'{acc:.2%}',
        ha='center', fontsize=13, fontweight='bold', color='#26474E'
    )

plt.tight_layout()
plt.savefig('model_comparison.png', dpi=150)
plt.show()
print("✅ Saved: model_comparison.png")

# ================================
# 8. Best Model
# ================================
if dt_accuracy >= knn_accuracy:
    best_model = dt_model
    best_pred = dt_pred
    best_name = "Decision Tree"
    best_accuracy = dt_accuracy
else:
    best_model = knn_model
    best_pred = knn_pred
    best_name = "KNN"
    best_accuracy = knn_accuracy

print(f"\n🏆 Best Model: {best_name} ({best_accuracy:.2%})")

print("\n📊 Classification Report:")
print(classification_report(y_test, best_pred, target_names=le.classes_))

# ================================
# 9. Save Model
# ================================
print("\n💾 Saving model...")

# Get the directory where train_model.py is located
import os
script_dir = os.path.dirname(os.path.abspath(__file__))

# Save in same folder as train_model.py
model_path = os.path.join(script_dir, 'budget_model.pkl')
vectorizer_path = os.path.join(script_dir, 'budget_vectorizer.pkl')
encoder_path = os.path.join(script_dir, 'budget_encoder.pkl')

with open(model_path, 'wb') as f:
    pickle.dump(best_model, f)

with open(vectorizer_path, 'wb') as f:
    pickle.dump(vectorizer, f)

with open(encoder_path, 'wb') as f:
    pickle.dump(le, f)

print(f"✅ Saved: {model_path}")
print(f"✅ Saved: {vectorizer_path}")
print(f"✅ Saved: {encoder_path}")

# ================================
# 10. Test Predictions
# ================================
print("\n🔮 Test Predictions:")
print("-" * 55)

def predict(description, amount, t_type='debit'):
    text = vectorizer.transform([description])
    amt = np.array([[amount]])
    typ = np.array([[1 if t_type == 'debit' else 0]])
    features = sp.hstack([text, amt, typ])
    pred = best_model.predict(features)
    proba = best_model.predict_proba(features).max()
    return le.inverse_transform(pred)[0], proba

tests = [
    ("Pizza delivery", 25.0, "debit"),
    ("Uber ride", 15.0, "debit"),
    ("Netflix subscription", 12.0, "debit"),
    ("Electric bill", 120.0, "debit"),
    ("Amazon purchase", 50.0, "debit"),
    ("Salary", 3000.0, "credit"),
    ("Starbucks", 6.0, "debit"),
]

for desc, amt, t in tests:
    cat, conf = predict(desc, amt, t)
    print(f"  '{desc}' (${amt}) → {cat} ({conf:.1%})")

print("\n✅ Training complete!")

#python malek_ml/train_model.py