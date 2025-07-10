<?php
//&& harus benar keduanya, jika salah satunya salah, hasilnya akan menjadi false

//|| harus benar salah satunya, kalo 1 aja yag benar hasilnya akan menjadi true

//! 

$x = 15;

var_dump ($x < 20 && $x > 10); //hasilnya akan true karna keduanya benar
echo "<br>";
var_dump ($x < 30 && $x < 5); //hasilnya akan menjadi 'false' karna cuman satu yang benar, dan satu nya salah
echo "<br>";
var_dump ($x < 30 || $x < 5); //hasilnya adalah true karna salah satunya benar

?>