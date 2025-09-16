<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 class="h2-create">Form tambah barang inventaris labotarium komputer</h2>
    <form class="inventory-form" method="POST" action="connect.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="kode">No</label>
    <input type="text" name="No" id="No" required>
  </div>
  <div class="form-group">
    <label for="kode">Kode Barang</label>
    <input type="text" name="Kode_barang" id="Kode_barang" required>
  </div>
  <div class="form-group">
    <label for="nama">Nama Barang</label>
    <input type="text" name="Nama Barang" id="Nama Barang" required>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="number" name="Jumlah" id="Jumlah" required>
  </div>
  <div class="form-group">
    <label for="tahun">Tahun Perolehan</label>
    <input type="number" name="Tahun Perolehan" id="Tahun Perolehan" required>
  </div>
  <div class="form-group">
    <label for="harga">Harga Perolehan</label>
    <input type="text" name="Harga Perolehan" id="Harga Perolehan" required>
  </div>
  <div class="form-group">
    <label>Penempatan</label>
    <div class="radio-group">
      <label><input type="radio" name="Penempatan" value="Labkom 1" required> Labkom1</label>
      <label><input type="radio" name="Penempatan" value="Labkom 2" required> Labkom2</label>
    </div>
  </div>
  <div class="form-group">
    <label for="foto">Foto Barang</label>
    <input type="file" id="Foto_Barang" name="Foto Barang" accept="image/*" required>
  </div>
  <button type="submit" value="upload">Simpan</button>
  <a href="index.php">Batal</a>
</form>
</body>
</html>