<?php
//3 jenis pengulangan yaitu:
//for
//while
//do while

//for
for ( $i = 0; $i < 5; $i++ ) {
    echo ("hello world! <br>" );
}
//$i = 0; adalah nilai awal
//$i < 5; adalah jumlah pengulangannya ingin berapa kali
//$i++ agar pengulangannya bertambah... supaya pengurangannya berkurang maka ketik '$i--'

//echo "hello world" adalah kalimat yang ingin di ulang
//biar ada spasi nya diantara perulangan, tambahkan spasi di ujung kalimat
//biar kalimatnya gak nyambung dan turun kebawah, tambahkan <br> di dalam tanda kutip

//
//
echo "<hr>";
//
//

//while
$i = 0;

while ($i < 5) {
    echo "goodbay world <br>";
$i++;
}
//for dengan while sebenarnya sama aja, yang membedakan cuman di tata letak
//nilai awal diletakan di atas
//jumlah pengulangan diletakan di dalam kurung while
//$i++ diletakan di bawah echo

//
//
echo "<hr>";
//
//

//do while
$i = 0;
do {
    echo "welcome back world <br>";
$i++;
} while( $i < 5);
//yang membedakan while dan do while adalah,
//while akan error jika $i bernilai false dari < 
// dan do while akan tetap menjalankan walaupun $i bernilai false dari <
?>