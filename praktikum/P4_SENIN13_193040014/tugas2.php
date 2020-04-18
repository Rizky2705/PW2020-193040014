<?php
$players = [
    ['foto'=> "gambar/angklung.jpg",
    'nama'=> "Angklung", 
    'main'=> "Dimainkan dengan cara digoyangkan", 
    'asal'=> "Jawa Barat", 
    'bahan'=> "Terbuat dari Bambu"],
    ['foto'=> "gambar/bonang.jpeg", 
    'nama'=> "Bonang", 
    'main'=> "Di pukul menggunakan tongkat yang berlapis", 
    'asal'=> "Jawa Tengah", 
    'bahan'=> "Bonang terbuat dari Perunggu"],
    ['foto'=> "gambar/gong.jpg", 
    'nama'=> "Gong", 
    'main'=> "Di pukul menggunakan tongkat yang berlapis", 
    'asal'=> "Jawa Tengah", 
    'bahan'=> "Terbuat dari Tembaga serta Timah"],
    ['foto'=> "gambar/kecapi.jpg", 
    'nama'=> "Kecapi", 
    'main'=> "Cara memainkannya dengan cara di petik seperti gitar", 
    'asal'=> "Jawa Barat, Kuningan", 
    'bahan'=> "Terbuat dari kayu dan beberapa senar"],
    ['foto'=> "gambar/kolintang.jpeg", 
    'nama'=> "Kolintang", 
    'main'=> "Dipukul menggunakan bilah-bilah kayu", 
    'asal'=> "Sulawesi Utara, Minahasa", 
    'bahan'=> "Menggunakan Kotak resonator"],
    ['foto'=> "gambar/pupuik _tanduak.jpg", 
    'nama'=> "Pupuik Tanduak", 
    'asal'=> "Sumatra Barat, Minangkabau", 
    'main'=> "Dimainkan dengan cara ditiup",   
    'bahan'=> "Teerbuat dari Tanduk Kerbau"],
    ['foto'=> "gambar/rebab.jpg", 
    'nama'=> "Rebab", 
    'main'=> "Dimainkan dengan cara di gesek", 
    'asal'=> "Jawa Tengah", 
    'bahan'=> "Rebab terbuat dari kayu nangka dan kulit sapi"],
    ['foto'=> "gambar/suling.jpg", 
    'nama'=> "Suling", 
    'main'=> "Dimainkan dengann cara di tiup", 
    'asal'=> "Jawa Barat",  
    'bahan'=> "Terbuat dari bilah bambu"],
    ['foto'=> "gambar/talindo.jpg", 
    'nama'=> "Talindo", 
    'main'=> "Dimainkan dengan cara dipetik", 
    'asal'=> "Sulawesi Selatan, Bugis",  
    'bahan'=> "Talindo terbuat dari kayu, tempurung kelapa, dan senar."],
    ['foto'=> "gambar/gendang.jpg", 
    'nama'=> "Gendang", 
    'main'=> "Dimainkan dengan cara dipukul", 
    'asal'=> "Yogyakarta", 
    'bahan'=> "Terbuat dari Kayu dan Kulit hewan"],
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    table {
      border-collapse: collapse;
    }
    table, th, td {
    border: 2px solid black;
    text-align: left;
    }
    img{
      height: 300px;
      width: 300px;
    }
    td{
      text-align: center;
    }
  </style>
  <title>Tugas2</title>
</head>
<body>

  <h3 align="center">Mengenal alat musik</h3>
  <table align="center" border="1" bgcolor="lightblue">
    <tr>
      
      <th width="300px">Foto</th>
      <th width="160px">Nama Alat Musik</th>
      <th width="50px">Asal Daerah</th>
      <th width="50px">Cara Mainnya</th>
      <th width="50px">Bahan Pembuatan</th>
    </tr>
    <?php 
          foreach($players as $player): 
    ?>
      <tr>
        
        <td><img src="<?=  $player['foto']; ?>"></td>
        <td><?=  $player['nama']; ?></td>
        <td><?=  $player['asal']; ?></td>
        <td><?=  $player['main']; ?></td>
        <td><?=  $player['bahan']; ?></td>
      </tr>
    <?php
      endforeach; 
    ?>
      </table>
</body>
</html>