<?php
$pemain = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"
    ];
?>
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemain bola</title>
</head>
<body>
<table border="1">

    <tr>
    <td colspan="3"><h3>Daftar pemain bola terkenal dan clubnya</h3></td>
    </tr>
    <?php foreach($pemain as $nama => $club) { ?>
    <tr>
        <td><?php echo $nama; ?></td>
        <td>: </td>
        <td><?php echo $club; ?></td>    
    </tr>
<?php } ?>
</table>

</body>
</html>