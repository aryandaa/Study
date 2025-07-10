<?php
function welcome($hari, $nama) {
    return "selamat $hari , $nama"; //untuk mengembalian nilai
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>fungsi</title>
</head>
<body>
    <h1><?= welcome("pagi", "aryanda"); ?></h1>
    <!-- nilai "aryanda" akan dikirim ke variable di function nama, dan variable function akan mengiriman nya ke 
    return -->
    <!-- nilai harus berurutan dengan variable di atas -->
</body>
</html>