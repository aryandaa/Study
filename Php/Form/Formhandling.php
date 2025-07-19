<?php
//ada 2 type form pada php yang tergantung pada penggunannya
//1. penggunaan untuk php terminal
$angka1 = readline('input angka pertama: ');

//2. penggunaan untuk php web. disini kita harus menggunaka html untuk menangkap inputan
?>
<!DOCTYPE HTML>
<html>  
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<!--Php untuk mengeksekusi inputannya-->
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>

<?php
/* 
Gets VS Post:
Dalam PHP, baik metode GET maupun POST akan menghasilkan sebuah array asosiatif yang berisi pasangan key dan value. Key adalah nama dari form input yang digunakan, 
dan value adalah data yang dimasukkan oleh pengguna. Contohnya, struktur array-nya seperti ini: array('key1' => 'value1', 'key2' => 'value2', ...).

Keduanya ditangani melalui variabel superglobal PHP, yaitu $_GET dan $_POST. 
Disebut superglobal karena variabel ini bisa diakses dari bagian manapun dalam kode PHP: baik di dalam fungsi, class, atau file lain, tanpa perlu di-pass secara eksplisit.

$_GET menyimpan data yang dikirim melalui URL. Misalnya, jika di URL tertulis page.php?nama=Yanda, maka $_GET['nama'] akan bernilai "Yanda". 
Sebaliknya, $_POST menyimpan data yang dikirim dari form menggunakan metode POST, biasanya untuk data yang lebih sensitif atau panjang karena tidak ditampilkan di URL.

KAPAN HARUS MENGGUNAKAN METHOD GET?
Metode GET sebaiknya digunakan ketika ingin mengirim data yang tidak bersifat sensitif dan jumlahnya sedikit. 
Karena data yang dikirim melalui GET akan terlihat langsung di URL (seperti ?nama=Yanda&umur=20), 
maka semua orang bisa melihatnya. Kelebihannya, URL yang berisi data ini bisa di-bookmark atau disimpan, 
cocok untuk pencarian atau filter yang ingin diulang kembali. 
Tapi perlu diingat, GET punya batasan ukuran data, sekitar 2000 karakter, jadi gak cocok untuk mengirim data yang panjang.

DAN KAPAN HARUS MENGGUNAKAN METHOD POST?
Sebaliknya, POST digunakan ketika data yang dikirim bersifat pribadi atau besar ukurannya. 
Data dari form yang dikirim dengan metode POST akan disisipkan di dalam body HTTP, jadi tidak terlihat di URL. 
Metode ini aman untuk mengirimkan informasi seperti password, data form panjang, dan juga digunakan saat upload file, karena POST mendukung multi-part binary input.
*/
?>
