import os
os.environ['TF_CPP_MIN_LOG_LEVEL'] = '3'

from flask import Flask, render_template, request, Response
from tensorflow import keras
from keras.preprocessing.text import Tokenizer
from tensorflow.keras.preprocessing.sequence import pad_sequences
from sklearn.model_selection import train_test_split

import pandas as pd

#retrieve model
model = keras.models.load_model('lstm_model1')
#retrieve dataset
df = pd.read_csv('cleaned_df.csv')
X = df['clean_tweet']
Y = pd.get_dummies(df['Label']).values

X_train, X_test, Y_train, Y_test = train_test_split(X, Y, test_size = 0.20, random_state = 42)

app = Flask(__name__)

@app.route('/')
def index():
    return render_template("index.html")

@app.route('/dataset')
def dataset():
    return render_template("dataset.html")

@app.route('/about')
def about():
    return render_template("about.html")

@app.route('/project')
def project():
    return render_template("project.html")

@app.route('/result', methods = ["POST"])
def result():
    mydata = []
    text = [str(request.form['myText'])]
    #myArr = [0.1, 0.1, 0.2, 0.3, 0.7, 0.2, 0.1, 0]
    tokenizer = Tokenizer(num_words=97883)
    tokenizer.fit_on_texts(X_train)
    seq = tokenizer.texts_to_sequences(text)
    padded = pad_sequences(seq, maxlen=50, truncating="post", padding="post")
    pred = model.predict(padded)

    mydata.append(text)
    mydata.append(list(pred[0]))
    return render_template("project2.html", data=mydata)

@app.route('/contact')
def contact():
    return render_template("contact.html")

if __name__ == "__main__":
    app.run(debug=True)