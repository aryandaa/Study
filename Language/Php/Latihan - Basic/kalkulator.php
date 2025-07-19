<?php
//membuat program kalkulator sederhana dari inputan user

$angka1 = readline('input angka pertama: '); //mengambil inputan user
$ToInt = (Int)$angka1; //diubah dulu ke integer agar bisa dijumlahkan

$angka2 = readline('input angka kedua: '); 
$ToInt2 = (Int)$angka2;

$aritmatika = readline('masukan perhitungan: ');
switch ($aritmatika) {
  case "+":
    echo $angka1 + $angka2;
    break;
  case "-":
    echo $angka1 - $angka2;
    break;
  case "*":
    echo $angka1 * $angka2;
    break;
  case "/":
    echo $angka1 / $angka2;
    break;
    default:
  case "%":
    echo $angka1 % $angka2;
    break;
   case "**":
    echo $angka1 ** $angka2;
    break;
    echo "masukan aritmatika yang benar";
}
?>