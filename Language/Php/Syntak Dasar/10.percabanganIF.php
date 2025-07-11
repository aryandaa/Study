<?php
//ada beberapa percabangan atau perkondisian yaitu
//if else
//if else if else
//ternary
//switch
$x = 10;
if( $x < 20 ) {
    echo "benar"; //jika hasilnya true, letakan di dalam kurung
} 
else {
echo "salah!!"; 
} //jika hasilnya false, letakan di dalam else

echo "<br>";

// metode if else if else
$x = 20;
if( $x < 20 ) {
    echo "benar"; 
} elseif ($x == 20){
    echo "angka tidak boleh sama";
} //jika ada jawaban lain maka tambahkan elseif diantara if dan else
else {
echo "salah!!"; 
} 

?>
