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

// metode switch
/*
switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
}
*/
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
