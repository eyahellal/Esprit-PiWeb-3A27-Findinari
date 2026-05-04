import sys
import json
import re
import joblib


def clean_text(text):
    text = str(text).lower()
    text = re.sub(r"http\S+", "", text)
    text = re.sub(r"@\w+", "", text)
    text = re.sub(r"#", "", text)
    text = re.sub(r"[^a-zA-Z\s]", "", text)
    text = re.sub(r"\s+", " ", text).strip()
    return text


# Load trained components
model = joblib.load("sentiment_model.pkl")
encoder = joblib.load("label_encoder.pkl")
vectorizer = joblib.load("tfidf_vectorizer.pkl")


# Read input JSON from stdin
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

    # ✅ Use TF-IDF (NOT Word2Vec)
    vector = vectorizer.transform([cleaned]).toarray()

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