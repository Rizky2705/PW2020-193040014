<!DOCTYPE html>
<html>

<head>
  <title>INDEX</title>
  <link rel="stylesheet" href="index.css">
</head>

<body background="img/bg.jpg">
  <h1>Selamat Melihat-lihat</h1>
  <div class="container">
    <table border="1" cellspacing="0" cellpading="10">

      <tr>
        <th>NO.</th>
        <th colspan="2">NAMA FOLDER</th>
        <th>LINK</th>

      </tr>
      <tr>
        <td colspan="4" class="warna1">PERKULIAHAN</td>
      </tr>
      <?php $i = 1;
      for ($no = 9; $no <= 13; $no++) : ?>
        <tr>
          <td><?= $i; ?>.</td>
          <td colspan="2">Pertemuan<?= $no; ?></td>
          <td colspan="2"><a href="perkuliahan/pertemuan<?= $no; ?>">Klik Disini</a></td>
        </tr>
      <?php $i++;
      endfor; ?>
      </tr>

      <tr>
        <td colspan="4" class="warna2">PRAKTIKUM</td>
      </tr>

      <tr>
        <?php $i = 1;
        for ($no = 1; $no <= 4; $no++) : ?>
      <tr>
        <td><?= $i; ?>.</td>
        <td colspan="2">P<?= $no; ?>_PW_193040014</td>
        <td colspan="2"><a href="praktikum/P<?= $no; ?>_PW_193040014">Klik Disini</a></td>
      </tr>
    <?php $i++;
        endfor; ?>
    </tr>

    <tr>
      <td rowspan="4">5.</td>
      <td rowspan="4">P5_PW_193040014</td>
    </tr>
    <tr>
      <td>Latihan5a</td>
      <td><a href="praktikum/P5_PW_193040014/Latihan5a/index.php">Klik Disini</a></td>
    </tr>
    <tr>
      <td>Latihan5b</td>
      <td><a href="praktikum/P5_PW_193040014/Latihan5b/index.php">Klik Disini</a></td>
    </tr>
    <tr>
      <td>Latihan5c</td>
      <td><a href="praktikum/P5_PW_193040014/Latihan5c/index.php">Klik Disini</a></td>
    </tr>

    <tr>
      <td rowspan="7">6.</td>
      <td rowspan="7">P6_PW_193040014</td>
    </tr>
    <tr>
      <td>Latihan6a</td>
      <td><a href="praktikum/P6_PW_193040014/Latihan6a/index.php">Klik Disini</a></td>
    </tr>
    <tr>
      <td>Latihan6b</td>
      <td><a href="praktikum/P6_PW_193040014/Latihan6b/index.php">Klik Disini</a></td>
    </tr>
    <tr>
      <td>Latihan6c</td>
      <td><a href="praktikum/P6_PW_193040014/Latihan6c/index.php">Klik Disini</a></td>
    </tr>
    <tr>
      <td>Latihan6d</td>
      <td><a href="praktikum/P6_PW_193040014/Latihan6d/index.php">Klik Disini</a></td>
    </tr>
    <tr>
      <td>Latihan6e</td>
      <td><a href="praktikum/P6_PW_193040014/Latihan6e/index.php">Klik Disini</a></td>
    </tr>
    <tr>
      <td>Tugas</td>
      <td><a href="praktikum/P6_PW_193040014/Tugas/index.php">Klik Disini</a></td>
    </tr>

    <tr>
      <td rowspan="4">7.</td>
      <td rowspan="4">P7_PW_193040014</td>
    </tr>
    <tr>
      <td>Latihan7a</td>
      <td><a href="praktikum/P7_PW_193040014/Latihan7a/index.php">Klik Disini</a></td>
    </tr>
    <tr>
      <td>Latihan7b</td>
      <td><a href="praktikum/P7_PW_193040014/Latihan7b/index.php">Klik Disini</a></td>
    </tr>
    <tr>
      <td>Latihan7c</td>
      <td><a href="praktikum/P7_PW_193040014/Latihan7c/index.php">Klik Disini</a></td>
    </tr>



    <tr>
      <td colspan="4" class="warna3">TUGAS BESAR</td>
    </tr>




    <tr>
      <td>1.</td>
      <td colspan="2">TUBES</td>
      <td colspan="2"><a href="tubes/Tugasbesar/index.php">Klik Disini</a></td>
    </tr>
    </table>
  </div>
</body>

</html>