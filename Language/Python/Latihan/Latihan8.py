'''
buatkan program untuk menghitung gajih yang di terima
proses program:
- nama karyawan (namakry)
- gaji pokok (gapok)
- jumlah jam kerja (jmljamkj)

Rumus:
- gaji kotor (gator)
    dihitung dari gaji pokok dikali dengan jumlah jam kerja
    jika gaji kotor diatas sama dengan 500.000 dikenakan pajak (tax)
    5% dan pada variable keterangan (ket) di isi pajak,
    sebaliknya jika gaji kotor dibawah 500.000, tidak dikenakan pajak
    dan variable keterangan di isi "tak pajak", gaji bersih yang diterima (gjterima)
    dihitung dari gaji kotor yang diterima dikurangi pajak

output:
- jumlah bayar
'''
# input data
namakry = input("masukkan nama karyawan : ")
gapok = int(input("masukkan gaji pokok : "))
jmljamkj = int(input("masukan jumlah jam kerja : "))

# proses data
gator = gapok * jmljamkj
if gator > 500000:
    tax = gator * 0.05
    ket = "dikenakan pajak"
else :
    tax = gator 
    ket = "tidak dikenakan pajak"

gjterima = gator - tax
print("\n")
print (f"karyawan dengan nama {namakry} dengan gaji pokok sejumlah {gapok:,} \n dan jam kerja {jmljamkj} \n")
print (f"karyawan tersebut menerima gaji bersih {gjterima:,} yang di ambil dari gaji kotor {gator:,} dikurangi dengan pajak {tax:,}")

