<?php
//variable scope atau lingkup variable

//contoh
$a = 10;
$c = 110;

function functa(){
    echo $a;
}
functa(); 
//fUnCtionnya akan error dan tidak akan menampilkan 10
//karna variable a memiliki ruang yang berbeda dengan function
//agar functionnya tampil, variable harus di letakan di dalam function

//contoh
function varb(){
    $a = 10; //dan ini namanya variable lokal
    //variable lokal hanya bisa diakses didalam function itu sendiri
    echo $a;
};
varb(); //hasilnya akan tampil, karna variable sudah di ruang yang sama dengan function

echo "<br>";

//kalo gini bakal ribet karna akan ada banyak variable
//caranya biar variable function mengambil dari luar

function func(){
    global $c; //tambahkan "global" untuk mencari var diluar functionn
    //dan ini namanya variable global
    //variable global bisa diakses dari manapun
    echo $c;
}
func ();

//variable global bisa juga ditulis dengan cara begini:
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest();
echo $y; // outputs 15

//static variable
/*
variabel di dalam fungsi biasanya akan hilang setelah fungsi selesai dijalankan. 
Tapi kalau pakai keyword static, variabel itu tidak dihapus dan bisa menyimpan nilainya untuk pemanggilan berikutnya. 
Jadi, kalau fungsi dipanggil berkali-kali, nilai variabelnya akan terus bertambah atau berubah sesuai yang terakhir. 
Ini berguna buat nyimpen data sementara tanpa harus pakai variabel global.
*/

function myTest2() {
  static $x = 0;
  echo $x;
  $x++;
}

foreach (range(1, 5) as $i) {
  myTest2();
  echo "<br>";
}
//jadi setiap berubahan yang terjadi pada variabel $x akan tetap ada meskipun fungsi sudah selesai dijalankan.
//tapi foreach diatas sama sepertinya dengan memanggil fungsi 5 kali,
myTest();
myTest();
myTest();
myTest();
myTest();

?>