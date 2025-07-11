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
    $a = 10;
    echo $a;
};
varb(); //hasilnya akan tampil, karna variable sudah di ruang yang sama dengan function

echo "<br>";

//kalo gini bakal ribet karna akan ada banyak variable
//caranya biar variable function mengambil dari luar

function func(){
    global $c; //tambahkan global untuk mencari var diluar functionn
    echo $c;
}
func ();

?>