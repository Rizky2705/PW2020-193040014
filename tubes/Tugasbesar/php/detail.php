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
    <style>
        .container {
            margin-top: 100px;
            width: auto;
            height: 40%;
        }

        .container table {
            text-align: center;
            border: 2px solid darkgoldenrod;

        }

        tr,
        td {
            border-bottom: 3px solid black;
        }
    </style>
    <title>193040014</title>
</head>

<body>

    <div class="container">
        <table>
            <tr>
                <td colspan="3"><img src="../assets/img/<?= $alat['Gambar']; ?>" alt=""></td>
            </tr>

            <tr>
                <td>Nama alat musik</td>
                <td>:</td>
                <td><?= $alat['Nama_alat_musik']; ?></td>
            </tr>

            <tr>
                <td>Asal daerah</td>
                <td>:</td>
                <td><?= $alat['Asal_daerah']; ?></td>
            </tr>

            <tr>
                <td>Cara memainkannya</td>
                <td>:</td>
                <td><?= $alat['Cara_main']; ?></td>
            </tr>

            <tr>
                <td>Terbuat dari</td>
                <td>:</td>
                <td><?= $alat['bahan_pembuatan']; ?></td>
            </tr>

            <tr>
                <td colspan="3">
                    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
                </td>
            </tr>

        </table>
    </div>

</body>

</html>