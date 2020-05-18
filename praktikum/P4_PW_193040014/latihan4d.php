<?php
$players = [
    ['nama'=> "Cristiano Ronaldo",'club'=> "Juventus", 'main'=> 100, 'gol'=> 76, 'assist'=> 30],
    ['nama'=> "Lionel Messi", 'club'=> "Barcelona", 'main'=> 120, 'gol'=> 80, 'assist'=> 12],
    ['nama'=> "Luca Modric", 'club'=> "Real Madrid", 'main'=> 87, 'gol'=> 12, 'assist'=> 48],
    ['nama'=> "Mohammad Salah", 'club'=> "Liverpool", 'main'=> 90, 'gol'=> 103, 'assist'=> 8],
    ['nama'=> "Neymar Jr", 'club'=> "Paris Saint Germain", 'main'=> 109, 'gol'=> 56, 'assist'=> 15],
    ['nama'=> "Sadio Mane", 'club'=> "Liverpool", 'main'=> 63, 'gol'=> 30, 'assist'=> 70],
    ['nama'=> "Zlatan Ibrahimovic", 'club'=> "Ac Milan", 'main'=> 100, 'gol'=> 10, 'assist'=> 12]
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
  </style>
  <title>Array Multidimensi</title>
</head>
<body>

  <h3>Daftar pemain bola terkenal dan clubnya</h3>
  <table border="1">
    <tr>
      <th>NO</th>
      <th width="150px">NAMA</th>
      <th width="160px">CLUB</th>
      <th width="50px">MAIN</th>
      <th width="50px">GOL</th>
      <th width="50px">ASSIST</th>
    </tr>
    <?php 
      $no=1;
      $jumlah_main=0;
      $jumlah_gol=0;
      $jumlah_assist=0;
      foreach($players as $player): 
    ?>
      <tr>
        <td><?=  $no; ?></td>
        <td><?=  $player['nama']; ?></td>
        <td><?=  $player['club']; ?></td>
        <td><?=  $player['main']; ?></td>
        <td><?=  $player['gol']; ?></td>
        <td><?=  $player['assist']; ?></td>
      </tr>
    <?php
      $no++; 
      $jumlah_main += $player['main'];
      $jumlah_gol += $player['gol'];
      $jumlah_assist += $player['assist'];
      endforeach; 
    ?>
    <tr>
      <th>#</th>
      <th colspan="2" style="text-align:center;">JUMLAH</th>
      <td><?= $jumlah_main; ?></td>
      <td><?= $jumlah_gol; ?></td>
      <td><?= $jumlah_assist; ?></td>
    </tr>
  </table>
</body>
</html>