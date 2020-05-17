<?php
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}


require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
alert ('Data Berhasil ditambahkan!');
document.location.href = 'admin.php';
</script>";
  } else {
    echo "<script>
    alert ('Data Gagal ditambahkan!');
    document.location.href = 'admin.php';
    </script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>193040014</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">

  </form>
  <table border="2" cellspacing="2" cellpading="3">
    <ul>
      <tr>
        <td><label for="gambar">Gambar :</label></td>
        <td><input type="text" name="gambar" id="Gambar" required><br><br></td>
      </tr>

      <tr>
        <td><label for="gambar">Nama alat musik :</label></td>
        <td><input type="text" name="Nama" id="Nama_alat_musik" required><br><br></td>
      </tr>

      <tr>
        <td><label for="gambar">Asal alat musik :</label></td>
        <td><input type="text" name="gambar" id="Asal_daerah" required><br><br></td>
      </tr>

      <tr>
        <td><label for="gambar">Cara memainkan :</label></td>
        <td><input type="text" name="gambar" id="Cara_main" required><br><br></td>
      </tr>

      <tr>
        <td><label for="gambar">Bahan pembuatan :</label></td>
        <td><input type="text" name="gambar" id="Bahan_pemuatan" required><br><br></td>
        <br>
      </tr>

      <tr>
        <td colspan="2"><button type="submit" name="tambah">Tambah Data!</button></td>
      </tr>
      <tr>
        <td colspan="2"><button type="submit">
            <a href="index.php" style="text-decoration: none; color:black">Kembali</a>
          </button></td>
      </tr>

  </table>

</body>

</html>