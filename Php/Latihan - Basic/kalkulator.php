<?php
//membuat program kalkulator sederhana dari inputan user

$angka1 = readline('input angka pertama: ');
$angka2 = readline('input angka kedua: '); 

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