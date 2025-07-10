#data
nama = "yanda"
umur = "19"
berat = 56
tinggi = 160
sepatu = 31

#string standar
data_string = f"nama = {nama}, umur = {umur}, berat badan = {berat}, tinggi badan = {tinggi}, ukuran sepatu = {sepatu}"
print(data_string, "\n")

#string multiline
data_string = f"nama = {nama}, \numur = {umur}, \nberat badan = {berat}, \ntinggi badan = {tinggi}, \nukuran sepatu = {sepatu}"
print(data_string, "\n")

#string kutip triplets
data_string = f"""
nama = {nama}
umur = {umur}
berat badan = {berat}
tinggi badan = {tinggi}
ukuran sepatu = {sepatu}
"""
print(data_string, "\n")

#mengatur aligment
data_string = f"""
Nama            = {nama:>5}
Umur            = {umur:>5}
Berat Badan     = {berat:>5}
Tinggi Badan    = {tinggi:>5}
Ukuran Sepatu   = {sepatu:>5}
"""
print(data_string, "\n")