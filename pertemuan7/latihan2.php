<?php
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["nomor"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["alamat"]) ||
    !isset($_GET["gambar"])
) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>

<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nomor"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["alamat"]; ?></li>
    </ul>
    <a href="latihan1.php">Kembali ke daftar Produk</a>
</body>

</html>