<?php
/*
constanst sama seperti variable, tetapi nilainya tetap dan tidak bisa diubah di tengah tengah program,
Biasanya dipakai untuk menyimpan data yang tidak boleh berubah, seperti konfigurasi, kode tetap, dll.
dan kelebihan dari const adalah scope yang otomatis global tidak seperti variable biasa yang harus di definisikan global secara manual

Syntak:
define(name, value);
*/
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

//define bisa dipakai untuk logika, percabangan, perulangan, maupun function
if (true) {
    define("HELLO", "Hi there");
    echo HELLO;
}

//bisa juga menggunakan keyword "const"
const MYCAR = "Volvo";
echo MYCAR;
//tetapi Hanya boleh dideklarasikan di level paling atas dalam file, class, atau namespace.
//dan tidak bisa dipakai untuk logika, percabangan, perulangan, dan function


//Constant Array
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>