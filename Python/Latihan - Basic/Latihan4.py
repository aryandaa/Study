'''
latihan menghitung Total Belanja (Percabangan + Input + Looping)

Buat program untuk menghitung total belanja pelanggan:

- Pelanggan memasukkan jumlah barang yang ingin dibeli.
- Untuk setiap barang, pengguna memasukkan harga barangnya.
Jika total belanja:
- ≥ 500.000 → dapat diskon 10%
- ≥ 1.000.000 → dapat diskon 15%
Program menampilkan total sebelum & sesudah diskon.
'''

#Jawaban
print("""Selamat datang di Hypermart
disini ada diskon besar besaran
jika km membeli barang dengan jumlah:
diatas ≥ 500.000 → dapat diskon 10%
diatas ≥ 1.000.000 → dapat diskon 15%\n
""")

jumlah = int(input("Masukan jumlah barang yang di beli : "))
total = 0
for i in range(jumlah):
    harga = float(input("Masukan harga barang ke - " + str(i+1) + " : "))
    total += harga

if total >= 1000000:
    diskon = total * 0.15  # 15% diskon
    total -= diskon
    print(f"Total belanjaan kamu setelah diskon 15% adalah {total:,.2f}")
elif total >= 500000:
    diskon = total * 0.10  # 10% diskon
    total -= diskon
    print(f"Total belanjaan kamu setelah diskon 10% adalah {total:,.2f}")
else:
    print(f"Total belanjaan kamu adalah {total:,.2f} (tidak dapat diskon)")