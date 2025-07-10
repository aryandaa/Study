#operasi binary pada python
#operasi binary adalah operasi yang menggunakan angka biner sebagai operand
'''contoh, 
int -> 2 = 00000010
int -> 1 = 00000001
dan seterusnya...
'''
#contoh operasi binary pada python
a = 10
b = 13

#bitwise OR (|)
c = a | b 
print('===OR===')
print(a)
print(format(a,'08b'))
print(b)
print(format(b,'08b'))
print("hasil:")
print(format(c,'08b'))
print(c)
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
print(a)
print(format(a,'08b'))
print(b)
print(format(b,'08b'))
print("hasil:")
print(format(c,'08b'))
print(c)
print('\n')

#bitwise AND (^)
c = a ^ b 
print('===XOR===')
print(a)
print(format(a,'08b'))
print(b)
print(format(b,'08b'))
print("hasil:")
print(format(c,'08b'))
print(c)
print('\n')

#bitwise NOT (~)
c = ~a
print('===NOT===')
print(a)
print(format(a,'08b')) 
print("hasil:")
print(format(c,'08b'))
print(c)
print('\n')

#bitwise shift right (>>)
c = a >> 1
print('===SHIFT RIGHT===')
print(a)
print(format(a,'08b')) 
print("hasil:")
print(format(c,'08b'))
print(c)
print('\n')
#menggeser ke kanan

#bitwise shift left (<<)
c = a << 1
print('===SHIFT LEFT===')
print(a)
print(format(a,'08b')) 
print("hasil:")
print(format(c,'08b'))
print(c)
print('\n')
#menggeser ke kiri 

