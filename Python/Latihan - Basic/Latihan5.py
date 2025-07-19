'''
Buat program yang meminta pengguna memasukkan tinggi segitiga, 
lalu mencetak segitiga bintang.
'''
tinggi_segitiga = int(input("Masukkan tinggi segitiga: "))
if tinggi_segitiga > 0:
    for i in range (1, tinggi_segitiga + 1) :
        print ("*" * (i))
else :
    print("tinggi harus lebih dari 0")
