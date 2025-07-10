#sama seperti bahasa pemrograman lainnya di python juga ada logika eperti
#not, and, or, xor

#contoh penggunaan logika di python

#not adalah kebalikan dari hasilnya, jika true berarti false, jika false berarti true
print(not True) #hasilnya false
print(not False) #hasilnya true

#and jika kedua nilai true maka hasilnya true, jika salah satu false maka hasilnya false
print(True and True) #hasilnya true
print(True and False) #hasilnya false
print(False and False) #hasilnya false

#or jika salah satu nilai true maka hasilnya true, jika kedua nilai false maka hasilnya false
print(True or True) #hasilnya true
print(True or False) #hasilnya true
print(False or False) #hasilnya false

#xor jika salah satu nilai true maka hasilnya true, sisanya false, walaupun keduanya true
print(True ^ True) #hasilnya false
print(True ^ False) #hasilnya true
print(False ^ True) #hasilnya true
print(False ^ False) #hasilnya false


