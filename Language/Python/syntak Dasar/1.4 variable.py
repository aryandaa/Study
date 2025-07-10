#di bahassa python jika membuat variable tidak memerlukan titik koma di ujung, jadi langsung saja

#ini adalah variable nya
i = "aku"
love = "suka"
you = "kamu"
'''
untuk penamaan assignment kita bebas memberikan nama apa.
peraturan penulisan assignment variable:

tidak boleh ada spasi
nilai y = 15 (X)
jika ada spasi bisa diganti dengan underscore seperti ini
'''
nilai_y = 15
'''

tidak boleh ada angka di depan
1juta = 1000000 (X)
kita bisa menggantinya dengan huruf atau taruh angka di belakang
'''
SatuJuta = 1000000
#atau
Juta1 = 1000000 

#untuk mengeluarkan varialenya kita gunakan print, dan koma untuk pembatas antara variable ata text
#kita bisa menaruh variablenya dimana saja, tanpa harus berurutan
print(i, love, you)
print("aku", love, "kamu")
print(i, love, "tempe")
print(you, "sedang" ,i, "sedang belajar")

#assignment indirect
a = 7

print(a)

b = a

print(b)
#maka outputnya menjadi 7