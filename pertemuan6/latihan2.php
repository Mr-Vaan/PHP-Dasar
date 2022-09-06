<?php
//$mahasiswa = [
//    ["Muhammad Ivan Chriana", "023092032", "ivandhebel@gmail.com", "TIK"],
//    ["Rizal Matovani", "05472032", "rizal@gmail.com", "Pembangunan"]
//];

// Array Associative
// Definisinya sama seperti array numerik, kecuali
//  key-nya adalah string yang kita buat sendiri
$produk = [
    [
        "nama" => "muhammad ivan chriana",
        "nomor" => "082213473723",
        "email" => "ivan@gmail.com",
        "alamat" => "Desa Sindang laut",
        "gambar" => "one.png"
    ],
    [
        "nama" => "romli",
        "nomor" => "020566238",
        "email" => "romli@gmail.com",
        "alamat" => "Jakarta Timur ",
        "gambar" => "two.png"
    ],
    [
        "nama" => "romli",
        "nomor" => "020566238",
        "email" => "romli@gmail.com",
        "alamat" => "Jakarta Timur ",
        "gambar" => "three.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>DAFTAR MAHASISWA</h1>
    <?php foreach ($produk as $pdk) : ?>
        <ul>
            <li>
                <img src="img/<?= $pdk["gambar"]; ?>">
            </li>
            <li>Nama :<?= $pdk["nama"]; ?></li>
            <li>Nomor:<?= $pdk["nomor"]; ?></li>
            <li>Email :<?= $pdk["email"]; ?></li>
            <li>Alamat :<?= $pdk["alamat"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>