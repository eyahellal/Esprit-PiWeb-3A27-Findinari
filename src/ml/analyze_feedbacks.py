import sys
import json
import re
import joblib
import numpy as np

from gensim.models import Word2Vec


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


w2v_model = Word2Vec.load("word2vec_tweets.model")
model = joblib.load("sentiment_model.pkl")
encoder = joblib.load("label_encoder.pkl")

input_data = sys.stdin.read()

if not input_data.strip():
    feedbacks = []
else:
    feedbacks = json.loads(input_data)

positive = 0
negative = 0
neutral = 0
irrelevant = 0
results = []

for feedback in feedbacks:
    message = feedback.get("message", "")
    rating = int(feedback.get("rating", 0))

    cleaned = clean_text(message)
    tokens = cleaned.split()

    vector = text_to_vector(tokens, w2v_model, 100).reshape(1, -1)

    prediction = model.predict(vector)
    sentiment = encoder.inverse_transform(prediction)[0]

    if sentiment == "Positive":
        positive += 1
    elif sentiment == "Negative":
        negative += 1
    elif sentiment == "Neutral":
        neutral += 1
    else:
        irrelevant += 1

    results.append({
        "id": feedback.get("id"),
        "user_email": feedback.get("user_email"),
        "rating": rating,
        "message": message,
        "sentiment": sentiment
    })

summary = {
    "total_feedbacks": len(feedbacks),
    "positive": positive,
    "negative": negative,
    "neutral": neutral,
    "irrelevant": irrelevant,
    "results": results
}

print(json.dumps(summary, ensure_ascii=False))