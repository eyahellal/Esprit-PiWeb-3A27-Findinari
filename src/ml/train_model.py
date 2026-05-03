import re
import joblib
import numpy as np
import pandas as pd

from gensim.models import Word2Vec
from sklearn.neural_network import MLPClassifier
from sklearn.preprocessing import LabelEncoder


def clean_text(text):
    text = str(text).lower()
    text = re.sub(r"http\S+", "", text)
    text = re.sub(r"@\w+", "", text)
    text = re.sub(r"#", "", text)
    text = re.sub(r"[^a-zA-Z\s]", "", text)
    text = re.sub(r"\s+", " ", text).strip()
    return text


def text_to_vector(tokens, model, vector_size=100):
    vectors = [model.wv[word] for word in tokens if word in model.wv]

    if len(vectors) == 0:
        return np.zeros(vector_size)

    return np.mean(vectors, axis=0)


df = pd.read_csv("twitter_training.csv", header=None)
df.columns = ["id", "entity", "sentiment", "tweet"]

df = df.dropna(subset=["tweet", "sentiment"])
df = df[df["sentiment"].isin(["Positive", "Negative", "Neutral", "Irrelevant"])]

df["clean_tweet"] = df["tweet"].apply(clean_text)
df["tokens"] = df["clean_tweet"].apply(lambda x: x.split())

w2v_model = Word2Vec(
    sentences=df["tokens"].tolist(),
    vector_size=100,
    window=5,
    min_count=2,
    workers=4,
    sg=1
)

X = np.array([
    text_to_vector(tokens, w2v_model, 100)
    for tokens in df["tokens"]
])

encoder = LabelEncoder()
y = encoder.fit_transform(df["sentiment"])

model = MLPClassifier(
    hidden_layer_sizes=(128, 64, 32),
    activation="relu",
    solver="adam",
    max_iter=20,
    random_state=42
)

print("Training model...")
model.fit(X, y)

w2v_model.save("word2vec_tweets.model")
joblib.dump(model, "sentiment_model.pkl")
joblib.dump(encoder, "label_encoder.pkl")

print("Models saved successfully.")