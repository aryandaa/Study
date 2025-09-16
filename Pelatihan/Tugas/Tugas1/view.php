<?php
include 'connect.php';

// Ambil kode barang dari URL
$kode = mysqli_real_escape_string($conn, $_GET['kode'] ?? '');
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM produk WHERE Kode_barang='$kode'"));

if (!$data) {
    echo "Barang dengan kode tersebut tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Barang</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <div class="container">
    <div class="image">
      <img src="image/<?php echo htmlspecialchars($data['Foto_Barang']); ?>" 
           alt="<?php echo htmlspecialchars($data['Nama_Barang']); ?>" 
           width="300">
    </div>

    <div class="info">
      <p><span>Kode Barang : </span><?php echo htmlspecialchars($data['Kode_barang']); ?></p>
      <p><span>Nama Barang : </span><?php echo htmlspecialchars($data['Nama_Barang']); ?></p>
      <p><span>Jumlah : </span><?php echo htmlspecialchars($data['Jumlah']); ?></p>
      <p><span>Tahun Perolehan : </span><?php echo htmlspecialchars($data['Tahun_Perolehan']); ?></p>
      <p><span>Harga Perolehan : </span>Rp. <?php echo number_format($data['Harga_Perolehan'],0,',','.'); ?></p>
      <p><span>Penempatan : </span><?php echo htmlspecialchars($data['Penempatan']); ?></p>
    </div>

    <div class="button">
      <button onclick="history.back()">Back</button>
    </div>
  </div>
</body>
</html>
