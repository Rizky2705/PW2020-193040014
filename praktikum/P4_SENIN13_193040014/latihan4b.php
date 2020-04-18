<?php
$pemain = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar pemain bola</title>
</head>
<body>
    <h3>Daftar pemain bola terkenal</h3>
    <?php $hasil = sort($pemain); ?>
    <ol>
        <li><?php echo $pemain[0]; ?></li>
        <li><?php echo $pemain[1]; ?></li>
        <li><?php echo $pemain[2]; ?></li>
        <li><?php echo $pemain[3]; ?></li>
        <li><?php echo $pemain[4]; ?></li>    
    </ol>

    <h3>Daftar pemain bola terkenal baru</h3>
    <?php $hasil = array_push($pemain, "Luca Modric", "Sadio Mane"); ?>
    <?php $hasil = sort($pemain); ?>
    <ol>
        <li><?php echo $pemain[0]; ?></li>
        <li><?php echo $pemain[1]; ?></li>
        <li><?php echo $pemain[2]; ?></li>
        <li><?php echo $pemain[3]; ?></li>
        <li><?php echo $pemain[4]; ?></li>
        <li><?php echo $pemain[5]; ?></li>
        <li><?php echo $pemain[6]; ?></li>    
    </ol>

</body>
</html>