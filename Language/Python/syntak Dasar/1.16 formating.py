#generic string
print ("===Generic str===")
nama = "yanda"
format_str = f"hello {nama}"
print(format_str, "\n")

#kita bisa mempersingkat syntak di atas dengan begini
#generic integer
print ("===Generic int===")
tahun = 2006
print(f"tahun = {tahun} \n")

#dan begiyu juga dengan boolean, float, dll

#format bilangan ribuan ratusan dan jutaan yang ada koma di setiap 3 digit
uang = 2000000000
print(f"uang = {uang:,} \n") #tambahan :, di sebelah kanan pnyebutan variable

#mempersingkat kan decimal
phi = 3.141592653589793238462643383279502884197169399375105
print(f"phi = {phi:.2f} \n") 
#tambahan :2f untuk mengambil 2 angka di belakang koma,
#jika mau 3 dan lebih banyak lagi, tambahi 2 nya menjadi :3f :4f dst...

'''
dan lebih banyak lagi trik memformat seperti ini
:+d menampilkan minus - di sebelah kiri angka
:+ menampilkan plus
:% menampilkan persentase
:0 menampilkan angka tanpa koma
'''

#format angka lain (binary, octal, hexadecimal)
angka = 192006
binary = f"binary = {bin(angka)}"
octal = f"octal = {oct(angka)}"
hexa = f"hexa = {hex(angka)}"
print(binary,"\n",octal,"\n",hexa,"\n")

#mengubah binary, octal, hexa ke angka biasa
binary = 0b101110111000000110
octal = 0o567006
hexa = 0x2ee06
print ("binary =", binary, "\n", "octal =", octal, "\n", "hexa =", hexa, "\n")