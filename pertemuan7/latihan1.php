<?php
// SUPERGLOBALS
// Variabel GLOBAL MILIK PHP :
// $_GET , $_POST, $_REQUEST, $SESSION, $_COOKIE, $_SERVER, $_ENV.
// $_GET
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
    <title>GET</title>
</head>

<body>
    <h1>DAFTAR PRODUK</h1>
    <ul>
        <?php foreach ($produk as $pdk) : ?>
            <li>
                <a href="latihan2.php?nama= <?= $pdk["nama"]; ?>&nomor= <?= $pdk["nomor"]; ?>&email= <?= $pdk["email"]; ?>&alamat= <?= $pdk["alamat"]; ?>&gambar=<?= $pdk["gambar"] ?> "><?= $pdk["nama"];  ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>




<?php
// Variabel LOKAL
// Variabel Scope / Lingkup variabel

//$x = 10; // Luar Halaman Variabel

//function tampilX() { //Halaman Dalam Variabel
//    global $x; // VariabEL Lokal : $x = 20; Variabel Global : global $x;
//    echo $x;
//    }
//tampilX();
?>