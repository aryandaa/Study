#operasi binary pada python
#operasi binary adalah operasi yang menggunakan angka biner sebagai operand
'''contoh, 
int -> 2 = 00000010
int -> 1 = 00000001
dan seterusnya...
'''
#contoh operasi binary pada python
a = 9
b = 5

#bitwise OR (|)
c = a | b 
print('===OR===')
print(format(a,'08b'))
print(format(b,'08b'))
print("hasil:")
print(format(c,'08b'))
print('\n')

'''
membandigkan or antara
0 0 0 0 1 0 0 1
0 0 0 0 1 1 0 1
hasilnya adalah 00001101
penjelasan:
0
0
0
0
1 #1 or 1 = 1. 
1 #1 or 0 = 1.
0 #0 or 0 = 0. 
1 #1 or 1 = 1.

dan begitu juga dengan operasi lainnya seperti AND, XOR, NOT, dan lain-lain.
'''

#bitwise AND (&)
c = a & b 
print('===AND===')
print(format(a,'08b'))
print(format(b,'08b'))
print("hasil:")
print(format(c,'08b'))
print('\n')

#bitwise AND (^)
c = a ^ b 
print('===XOR===')
print(format(a,'08b'))
print(format(b,'08b'))
print("hasil:")
print(format(c,'08b'))
print('\n')

#bitwise NOT (~)
c = ~a
print('===NOT===')
print(format(a,'08b')) 
print("hasil:")
print(format(c,'08b'))
print('\n')

#bitwise shift right (>>)
c = a >> 1
print('===SHIFT RIGHT===')
print(format(a,'08b')) 
print("hasil:")
print(format(c,'08b'))
print('\n')
#menggeser ke kanan

#bitwise shift left (<<)
c = a << 1
print('===SHIFT RIGHT===')
print(format(a,'08b')) 
print("hasil:")
print(format(c,'08b'))
print('\n')
#menggeser ke kiri 

