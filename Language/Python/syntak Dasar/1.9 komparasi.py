#setiap hasil dari operasi komparasi adalah boolean
#jadi cuman ada true atau false
#operator terebut adalah:
# > (lebih besar dari)
# < (lebih kecil dari)
# >= (lebih besar sama dengan)
# <= (lebih kecil sama dengan)
# == (sama dengan)
# != (tidak sama dengan)
#is
#is not

#<, >, >=, <=, ==, != itu sama seperti bahasa pemrograman lainnya dipakai dengan cara
hasil = 5 > 3
print (hasil) #hasilnya true
#dan yang lainnya

#"is" dan "is not" itu beda dengan bahasa pemrograman lainnya
#"is" sebagai operator komparasi object identity
#digunakan untuk memeriksa apakah dua variabel itu sama

x = 5
y = 5
hasil = x is y
print (hasil) #hasilnya true karena sama

a = 5 
b = 10
hasil = a is b
print (hasil) #hasilnya false karena tidak sama

#is not adalah lawan dari is
x = 5
y = 5
hasil = x is not y
print (hasil) #hasilnya false karena sama

#is dan is not cuman bisa work ke variable, tidak dengan str atau int seperti
q = 15

hasil = q is 15
print (hasil) #hasilnya adalah "warning" karena tidak bisa