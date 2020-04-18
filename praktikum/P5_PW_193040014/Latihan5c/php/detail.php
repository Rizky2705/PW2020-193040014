<?php

//mengecek apakah ada id yang dikirikan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['Gambar'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// mengambil id dari url
$gambar = $_GET['Gambar'];

// melakukan query dengan parameter id yang diambil dari url
$alat = query("SELECT * FROM tubes_193040014 WHERE Gambar = $gambar")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040014</title>
</head>

<body>
    <div class="container">
        <div class="Gambar">
            <img src="../assets/img/<?= $musik["Gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $musik["Nama_alat_musik"]; ?></p>
            <p><?= $musik["Asal_daerah"]; ?></p>
            <p><?= $musik["Cara_main"]; ?></p>
            <p><?= $musik["bahan_pembuatan"]; ?></p>

        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>