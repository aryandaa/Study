'''
cara membuat if dan else harus ada komponen berikut
1. if 
2. kondisi jika true
3. aksinya
4. elif
5. kondisi kedua jika true
6. aksinya
7. else
9. aksinya jika false
'''
umur = int(input("masukan umur km: "))
print ("km berusia",umur,"tahun")
if umur >= 17 and umur <= 45:
    print("km sudah dewasa")
elif umur >= 46 and umur <= 60:
    print("KM SUDAH SANGAT TUA")
elif umur < 17 :
    print("km belum dewasa")
else : print ("masukan umur yang benar")