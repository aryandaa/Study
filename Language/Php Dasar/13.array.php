<?php
//array adalah variable yang menampung banyak nilai
//element pada array boleh memiliki type data yang berbeda
//value array dimulai dari 0

//contoh array
$data = ["aryanda", "hksn", 11, "pplg"];
$bulan = ["januari","februari","maret","april"];
$hari = ["senin","selasa", "rabu","kamis","jumat","sabtu","minggu"];

//cara menampilkan array

//menggunakan var_dump
var_dump ($data); //perbedaan var dump adalah bisa menghitung value

echo "<br>"; 

//menggunakan print_r
print_r ($bulan);

echo "<br>";

//cara menampilkan 1 nilai pada array
echo $hari[0]; //hasilnya adalah senin, karna senin memiliki velue 0

echo "<br>";

//cara menambahkan nilai array tanpa mengganggu variable di atas
$bulan[] = ["mei","juni"];

print_r ($bulan); //hasilnya sama kaya variable bulan di atas, bedanya akan ada mei dan juni

?>