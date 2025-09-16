<?php
$conn = mysqli_connect($servername="localhost", $username="root", $password="", $dbname="tugas_web");

//index.php
$sql = "SELECT * FROM produk";
$result = mysqli_query($conn, $sql);

//Create.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $No = $_POST['No'];
    $Kode_barang = $_POST['Kode_barang'];
    $Nama_Barang = $_POST['Nama_Barang'];
    $Jumlah = $_POST['Jumlah'];
    $Tahun_Perolehan = $_POST['Tahun_Perolehan'];
    $Harga_Perolehan = $_POST['Harga_Perolehan'];
    $penempatan = $_POST['Penempatan'];

    // ambil file yg diupload
    $target_dir = "image/";
    $filename = basename($_FILES["Foto_Barang"]["name"]);
    $target_file = $target_dir . $filename;
    move_uploaded_file($_FILES["Foto_Barang"]["tmp_name"], $target_file);

    $sql = "INSERT INTO produk (No, Kode_barang, Nama_Barang, Jumlah, Tahun_Perolehan, Harga_Perolehan, Penempatan, Foto_Barang)
    VALUES ('$No', '$Kode_barang', '$Nama_Barang', '$Jumlah', '$Tahun_Perolehan', '$Harga_Perolehan', '$penempatan', '$filename')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}