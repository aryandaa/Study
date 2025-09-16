<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <a href="Create.php"><button>ADD</button></a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode barang</th>
            <th>Nama</th>
            <th>jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php
        echo "<link rel=\"stylesheet\" href=\"style.css\">";
        foreach ($result as $row) {
            echo "<tr>";
                echo "<td>" . $row['No'] . "</td>";
                echo "<td>" . $row['Kode_barang'] . "</td>";
                echo "<td>" . $row['Nama_Barang'] . "</td>";
                echo "<td>" . $row['Jumlah'] . "</td>";
                echo "<td class='view-button'><a href='View.php?kode=" . $row['Kode_barang'] . "'>VIEW</a></td>";
            echo "</tr>";
        }
        if (mysqli_num_rows($result) == 0) {
            echo "<tr><td colspan='4'>tidak ada data</td></tr>";
        }
        ?>
    </table>
</body>
</html>