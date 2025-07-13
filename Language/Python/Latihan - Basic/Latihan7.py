"""
program yang mengubah text menjadi decode base64, dan sebaliknya
"""
import base64

#text ke base64
text = input("masukan text yang ingin diubah : ").encode('ascii')
encode = base64.b64encode(text).decode('ascii')
print(encode)

#base64 ke text
decode = input("masukan base64 yang ingin diubah : ").encode('ascii')
text = base64.b64decode(decode).decode('ascii')
print(text)