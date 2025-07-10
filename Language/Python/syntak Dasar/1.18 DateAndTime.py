import datetime
#import library datetime ke python


#mengetahui umur dan hari lahir
lahir = datetime.date(2006, 2, 5) #format yyyy,m,d
hari_ini = datetime.date.today()
umurhari = (hari_ini - lahir).days
umurtahun = umurhari // 365
umurbulan = (umurhari % 365) //30
# bulan = (umurhari % 365) // 30
print(f"tanggal lahir saya adalah: {lahir}")
print(f"Hari lahir saya adalah: {lahir:%A}")
print(f"umur saya adalah: {umurtahun} tahun, {umurbulan} bulan, {umurhari % 28} hari")

#untuk mengetahui syntak apa saja yang ada di library datetime
#buka web python dan search "datetime" 
#atau https://docs.python.org/3/library/datetime.html