#macam macam slash "\" yang bisa digunakan pada string dan berbagai fungsinya

'''
\' tanda kutip tunggal
\" tanda kutip ganda 
\n baris baru
\t tap (spasi banyak)
\\ backlash itu sendiri 
\b menghapus 1 angka terakir dari kata, dan menggabungkannya dengan kata yang di depan 
'''

#contoh penggunaan
print ('ini adalah hari jum\'at')
print ("andi berkata: \"aku ingin makan ikan\"")
print ("1. baris pertama \n2. baris kedua")
print ("C:\\user\\yanda") #jika tidak menggunakan \\ maka akan menjadi error karena \ 1 anggap karakter special
print ("aku\bsayang\bkamu")


#raw string
#untuk mengubah semuanya menjadi string tanpa harus \
print(r"C:\user\yanda")
print(r"\n\t\b") 
#semuanya akan menjadi srting biasa tanpa haru kedetect karakter special

#multiline string
print(""""
Nama  : Aryanda
Umur  : !9
Kelas : 2B
Kampus: Poliban
      """)