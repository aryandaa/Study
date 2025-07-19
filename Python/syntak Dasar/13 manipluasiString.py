namaPertama = "Muhammad"
namaKedua = "Aryanda"
namaKetiga = "Sanggadiennata"
namaLengkap = namaPertama +" "+ namaKedua +" "+ namaKetiga
print(namaLengkap)

#1. Menghitung panjang string
panjang = len(namaLengkap)
print (panjang)

#2. mencari kata
find = "yanda"
status = find in namaLengkap
print (status) 
#jika ada maka hasilnya true
#jidak tidak ada hasilnya false
#lowercase dan uppercase dianggap berbeda

#3.mengulang string
print("wk" * 20)

#4. mengambil huruf paling kecil
print(min(namaLengkap))
#hasilnya spasi, karena spasi dianggap nilai paling kecil

#5. mengambil huruf paling besar
print(max(namaLengkap))

#6. operator dalam bentuk method
jumlah = namaLengkap.count("a")
print(jumlah)
#untuk menghitung berapa huruf yang terhandung dalam kalimat itu