<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan kehalaman index.php
if (!isset($_GET['Nomor'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET['Nomor'];

// melakukan query dengan parameter id yang diambil dari url
$alat = query("SELECT * FROM tubes_193040014 WHERE Nomor = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040014</title>
</head>

<body>


    <div class="container">
        <div class="bg_display">
            <img src="../assets/img/<?= $alat['Gambar']; ?>" alt="">
        </div>
        <div>

            <p><?= $alat['Nama_alat_musik']; ?></p>
            <p><?= $alat['Asal_daerah']; ?></p>
            <p><?= $alat['Cara_main']; ?></p>
            <p><?= $alat['bahan_pembuatan']; ?></p>

        </div>
    </div>

    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>