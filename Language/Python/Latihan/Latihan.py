
'''
buatkan logika input jika user meinput angka kurang dari 3 ATAU lebih dari 10 maka hasilnya true

'''
inputuser = float(input("masukan angka yang berilai\nkurang dari 3\natau lebih besar dari 10\n:"))
hasil = bool(inputuser < 3 or inputuser > 10)
print("hasil dari inputan anda adalah", hasil)



'''
buatkan logika jika user input angka lebih dari 3 dan kurang dari 10 maka hasilnya true
'''

inputuser = float(input("masukan angka yang berilai\nlebih dari 3\natau kurang dari 10\n:"))
hasil = bool(inputuser > 3 and inputuser < 10)
print("hasil dari inputan anda adalah", hasil)
