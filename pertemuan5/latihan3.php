<?php
// ARRAY NUMERIC
$mahasiswa = [
    ["Ivan Chriana", "090293923", "Sistem Informasi", "ivandhebel@gmail.com"],
    ["Rizal", "023232442", "Teknik Industri", "rizal@gmail.com"],
    ["Romli", "05456542", "Teknik Pemasaran", "romli@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>

<body>
    <h1>Daftar Mahasiswa :</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :<?= $mhs[0]; ?></li>
            <li>NRP :<?= $mhs[1]; ?></li>
            <li>Jurusan :<?= $mhs[2]; ?></li>
            <li>Email :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>