<?php
require 'functions.php';

// //jika tidak ada id dari url
// if (!isset($_GET['id'])) {
//   header("Location: index.php");
//   exit;
// }

//ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");



//cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "Data Gagal Diubah!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Ubah Data Mahasiswa</h3>
  <form action="" method="POST">
    <input type="hidden" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
        </label>
      </li>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required value="<?= $m['nrp']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required value="<?= $m['email']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required value="<?= $m['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!</button>
      </li>
      <li>
        <button><a href="index.php">Kembali</a></button>
      </li>
    </ul>
  </form>
  <script src="js/script.js"></script>
</body>

</html>