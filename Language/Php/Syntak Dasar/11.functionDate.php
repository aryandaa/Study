<?php
   echo date("l, d-M-y");

   //L untuk hari
   //D untuk tanggal
   //M untuk bulan
   //Y untuk tahun

   echo "<br>";
    
   
   echo date("l d-F-Y h:i:s");
   //h untuk jam
   //i untuk menit
   //s untuk detik

   echo "<br>";

   echo time(); 
   //untuk menghitung detik
   //detik mulai tanggal 1 januari 1970

   echo "<br>";

   echo date ("l", time()+60*60*24*100);
   //tambahkan function time untuk menghitung detik
   //60*60*24(detik dalam 24 jam)
   //'time()+' untuk menghitung maju
   //'time()-' untuk menghitung mundur

   echo "<br>";

   echo mktime(0, 0, 0, 0, 0, 0);
   //mktime berfungsi untuk membuat detik sendiri
   //mktime memiliki 6 parameter, yaitu
   //jam, menit, detik, bulan, tanggal, tahun

   echo "<br>";

   echo date("l", mktime(0,0,0,2,5,2006)); //untuk mencari tau hari apa pada tanggal itu

?>