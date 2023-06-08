import tensorflow as tf
import nltk
from tensorflow.keras.preprocessing.sequence import pad_sequences
from tensorflow.keras.preprocessing.text import Tokenizer
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize
from nltk.stem import WordNetLemmatizer
import pickle
import sys

#nltk.download('stopwords')
#nltk.download('punkt')
#nltk.download('wordnet')

lemmatizer = WordNetLemmatizer()
model = tf.keras.models.load_model('/home/server/prodtalk/toxic_comment_model.h5', compile=False)

tokenizer = pickle.load(open('/home/server/prodtalk/toxic_comment_tokenizer.pickle', 'rb'))
stop_words = set(stopwords.words('english'))
maxlen = 100  # This should be the same maxlen used in the original script

new_text = sys.stdin.read()

new_text_preprocessed = [lemmatizer.lemmatize(token) for token in word_tokenize(new_text.lower()) if token.isalpha() and token not in stop_words]
new_text_sequence = tokenizer.texts_to_sequences([' '.join(new_text_preprocessed)])
new_text_padded = pad_sequences(new_text_sequence, maxlen=maxlen)

clfresult = model.predict(new_text_padded)
predicted_label = "toxic" if clfresult[0][0] > clfresult[0][1] else "non-toxic"
is_toxic = clfresult[0][0] > clfresult[0][1]

sys.exit(1 if is_toxic else 0)