<?php
/*
Casting dalam PHP digunakan untuk mengubah tipe data dari suatu variabel.

(string) - Converts to data type String
(int) - Converts to data type Integer
(float) - Converts to data type Float
(bool) - Converts to data type Boolean
(array) - Converts to data type Array
(object) - Converts to data type Object
(unset) - Converts to data type NULL

Berikut adalah contoh penggunaan casting di PHP:
*/

$int = 10; // Integer
$intStr = (string)$int; // Mengubah integer menjadi string

$str = "123";
$intVar = (int)$str; // Mengubah string menjadi integer
$floatVar = (float)$str; // Mengubah string menjadi float
$boolVar = (bool)$str; // Mengubah string menjadi boolean
$arrayVar = (array)$str; // Mengubah string menjadi array
$objectVar = (object)$str; // Mengubah string menjadi object
$UnsetVar = (unset)$str; // Mengubah string menjadi NULL, tetapi ini sudah tidak valid di PHP

var_dump($intStr); // Output: string(2) "10"
echo "<br>";
var_dump($intVar); // Output: int(123)
echo "<br>";
var_dump($floatVar); // Output: float(123)
echo "<br>";
var_dump($boolVar); // Output: bool(true)
echo "<br>";
var_dump($arrayVar); // Output: array(1) { [0]=> string
echo "<br>";
var_dump($objectVar); // Output: object(stdClass)#1 (1) { ["scalar"]=> string(3) "123" }
echo "<br>";
var_dump($UnsetVar); // Output: NULL (tetapi ini tidak valid di PHP 7.4 ke atas)
echo "<br>";
?>