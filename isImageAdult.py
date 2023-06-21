import sys
import numpy as np

from tensorflow.keras.models import load_model
from tensorflow.keras.preprocessing import image

IMG_HEIGHT, IMG_WIDTH = 64, 64

# Load the model
model = load_model('nsfw_sfw_classifier.h5')

fileName = sys.argv[1]

# Load an image for prediction (replace 'test.jpg' with your image)
img = image.load_img(fileName, target_size=(IMG_HEIGHT, IMG_WIDTH))

# Preprocess the image
img_array = image.img_to_array(img)
img_array = np.expand_dims(img_array, axis=0)
img_array /= 255.

# Make a prediction
prediction = model.predict(img_array)

class_indices = np.load("class_indices.npy", allow_pickle=True).item()
class_labels = {v: k for k, v in class_indices.items()}
prediction[0] = 1-prediction[0]
isSafe = prediction[0] > 0.5
print(f"Probabilty Of Safe = {prediction[0][0]*100:.2f}%")

sys.exit(0 if isSafe else 1)