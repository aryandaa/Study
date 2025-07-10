angka1 = float(input("masukan angka 1 : "))
operator  = input("masukan operator : ")
angka2 = float(input("masukan angka 2 : "))

if operator == "+":
    hasil = angka1 + angka2
elif operator == "-":
    hasil = angka1 - angka2
elif operator == "*" :
    hasil = angka1 * angka2
elif operator == "/" :
    hasil = angka1 / angka2
elif operator == "%" :
    hasil = angka1 % angka2
elif operator == "**" :
    hasil = angka1 ** angka2
elif operator == "//" :
    hasil = angka1 // angka2 
else : print ("masukan operator yang benar")

print (f"hasil dari {angka1} {operator} {angka2} = {hasil:0}")