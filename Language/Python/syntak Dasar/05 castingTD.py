#casting adalah merubah tipe data dari suatu tipe data ke tipe data lainnya
#int ke str, str ke int, int ke float, dll

#contoh penggunaan casting dari integer ke float
print ("===INT KE FLOAT===")
data_int = 9
print("data = ", data_int, "type = ", type(data_int))
data_float = float(data_int)
print("data = ", data_float, "type = ", type(data_float))

print ("===BOOL KE INT===")
data_bool = True
print("data = ", data_bool, "type = ", type(data_bool))
data_int = int(data_bool)
print("data =", data_int, "type =", type(data_int))

print("===STR KE BOOL")
data_str = "ucup" 
print("data =", data_str, "type =", type(data_str))

data_bool = bool(data_str)
print("data =", data_bool, "type =", type(data_bool))