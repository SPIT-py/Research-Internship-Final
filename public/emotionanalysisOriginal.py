from nrclex import NRCLex
import sys
import json


# Assign emotion

text = sys.argv[1]
#text = "I am not happy"

# Create object
emotion = NRCLex(text)

# Using methods to classify emotion
#print('\n', emotion.words)
#print('\n', emotion.affect_dict)
#print('\n', emotion.affect_frequencies)

l = []
l = emotion.affect_frequencies
json_string = json.dumps(l)
print(json_string)
