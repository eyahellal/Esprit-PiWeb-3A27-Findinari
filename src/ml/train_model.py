import re
import joblib
import pandas as pd

from sklearn.neural_network import MLPClassifier
from sklearn.preprocessing import LabelEncoder
from sklearn.feature_extraction.text import TfidfVectorizer


def clean_text(text):
    text = str(text).lower()
    text = re.sub(r"http\S+", "", text)
    text = re.sub(r"@\w+", "", text)
    text = re.sub(r"#", "", text)
    text = re.sub(r"[^a-zA-Z\s]", "", text)
    text = re.sub(r"\s+", " ", text).strip()
    return text


# Load dataset
df = pd.read_csv("twitter_training.csv", header=None)
df.columns = ["id", "entity", "sentiment", "tweet"]

# Clean dataset
df = df.dropna(subset=["tweet", "sentiment"])
df = df[df["sentiment"].isin(["Positive", "Negative", "Neutral", "Irrelevant"])]

# Clean text
df["clean_tweet"] = df["tweet"].apply(clean_text)

# TF-IDF vectorization
vectorizer = TfidfVectorizer(max_features=5000)
X = vectorizer.fit_transform(df["clean_tweet"]).toarray()

# Encode labels
encoder = LabelEncoder()
y = encoder.fit_transform(df["sentiment"])

# Train model
model = MLPClassifier(
    hidden_layer_sizes=(128, 64, 32),
    activation="relu",
    solver="adam",
    max_iter=20,
    random_state=42
)

print("Training model...")
model.fit(X, y)

# Save models
joblib.dump(model, "sentiment_model.pkl")
joblib.dump(encoder, "label_encoder.pkl")
joblib.dump(vectorizer, "tfidf_vectorizer.pkl")

print("Models saved successfully.")