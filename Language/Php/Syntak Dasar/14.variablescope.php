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

?>