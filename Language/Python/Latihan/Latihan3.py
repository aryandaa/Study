
'''
2. Buat program tebak angka di mana:
- Komputer memilih angka random antara 1-50.
- pengguna diminta menebak angka tersebut sampai benar.

- Program memberi petunjuk:
- Jika terlalu besar, tampilkan "Angka terlalu besar!".
- Jika terlalu kecil, tampilkan "Angka terlalu kecil!".
- Setelah benar, tampilkan jumlah percobaan yang dilakukan.
'''

#jawaban
import random

num = random.randint(1, 50)
percobaan = 0
print("Aku memilih sebuah angka antara 1-50, coba tebak")
while True:
    guess = int(input("Masukkan angka yang kamu pikir aku pilih : "))
    percobaan += 1
    if guess < num :
        print("Angka terlalu kecil!")
    elif guess > num :
        print("Angka terlalu besar!")
    else :
        print(f"Yay! Kamu benar! memilih {num}, dalam {percobaan} percobaan")
        break
