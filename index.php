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
        <th>LINK</th>
        <th>NAMA FOLDER</th>

      </tr>
      <tr>
        <td colspan="3" class="warna1">PERKULIAHAN</td>
      </tr>
      <?php $i = 1;
      for ($no = 9; $no <= 13; $no++) : ?>
        <tr>
          <td><?= $i; ?>.</td>
          <td><a href="perkuliahan/pertemuan<?= $no; ?>">Klik Disini</a></td>
          <td>Pertemuan<?= $no; ?></td>
        </tr>
      <?php $i++;
      endfor; ?>
      </tr>

      <tr>
        <td colspan="3" class="warna2">PRAKTIKUM</td>
      </tr>

      <tr>
        <?php $i = 1;
        for ($no = 1; $no <= 7; $no++) : ?>
      <tr>
        <td><?= $i; ?>.</td>
        <td><a href="praktikum/P<?= $no; ?>_PW_193040014">Klik Disini</a></td>
        <td>P<?= $no; ?>_PW_193040014</td>
      </tr>
    <?php $i++;
        endfor; ?>
    </tr>

    <tr>
      <td colspan="3" class="warna3">TUGAS BESAR</td>
    </tr>

    <tr>
      <td>1.</td>
      <td><a href="tubes/">Klik Disini</a></td>
      <td>TUBES</td>
    </tr>
    </table>
  </div>
</body>

</html>