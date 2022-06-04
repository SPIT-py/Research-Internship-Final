from keras.models import load_model
from time import sleep
from keras.preprocessing.image import img_to_array
from keras.preprocessing import image
import cv2
import numpy as np
import os
from sys import argv

face_classifier = cv2.CascadeClassifier("haarcascade_frontalface_default.xml")
classifier =load_model("model.h5")

emotion_labels = ['Angry','Disgust','Fear','Happy','Neutral', 'Sad', 'Surprise']

angry=0
disgust=0
fear=0
happy=0
neutral=0
sad=0
surprise=0
maxi=0
ans='Neutral'

file_loc = ''

if(argv[1] == '0') :
    file_loc = 'videos/'+argv[2]
    video = cv2.VideoCapture(file_loc)
if(argv[1] == '1'):
    file_loc = 'videos/'+argv[2]
    video = cv2.VideoCapture(file_loc)

while True:
    _, frame = video.read()
    if frame is None:
            break

    height, width, layers = frame.shape
    size = (width,height)

    labels = []
    gray = cv2.cvtColor(frame,cv2.COLOR_BGR2GRAY)
    faces = face_classifier.detectMultiScale(gray)

    for (x,y,w,h) in faces:
        cv2.rectangle(frame,(x,y),(x+w,y+h),(0,255,255),2)
        roi_gray = gray[y:y+h,x:x+w]
        roi_gray = cv2.resize(roi_gray,(48,48),interpolation=cv2.INTER_AREA)

        if np.sum([roi_gray])!=0:
            roi = roi_gray.astype('float')/255.0
            roi = img_to_array(roi)
            roi = np.expand_dims(roi,axis=0)

            prediction = classifier.predict(roi)[0]
            label=emotion_labels[prediction.argmax()]

            if label=='Angry':
                angry = angry + 1

            if label=='Disgust':
                disgust = disgust + 1

            if label=='Fear':
                fear = fear + 1

            if label=='Happy':
                happy = happy + 1

            if label=='Neutral':
                neutral = neutral + 1

            if label=='Sad':
                sad = sad + 1

            if label=='Surprise':
                surprise = surprise + 1


if angry>maxi:
    maxi = angry
    ans = 'Angry'

if disgust>maxi:
    maxi = disgust
    ans = 'Disgust'

if fear>maxi:
    maxi = fear
    ans = 'Fear'

if happy>maxi:
    maxi = happy
    ans = 'Happy'

if neutral>maxi:
    maxi = neutral
    ans = 'Neutral'

if sad>maxi:
    maxi = sad
    ans = 'Sad'

if surprise>maxi:
    maxi = surprise
    ans = 'Surprise'


print(ans)

os.remove(file_loc)

video.release()

cv2.destroyAllWindows()
