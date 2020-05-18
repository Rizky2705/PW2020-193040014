<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3a</title>
    <style>
        .bungkus {
            box-shadow : 1px 1px 1px rgba(0,0,0,1);
            border : 2px solid black;

        }
    </style>
</head>
<body>
    <?php 
    $jawabanisset = "Isset adalah = .................. <br><br>";
    $jawabanempety = "Empty adalah = ..................";
    $GLOBALS ['Isset'] = $jawabanisset;
    $GLOBALS ['Empty'] = $jawabanempety;
        function soal($style){
            echo "<div class='$style'>
             <p>$GLOBALS[Isset]</p> 
             <p>$GLOBALS[Empty]</p>
             </div>";
         
        }
        ?>
        <?php
        echo soal("bungkus");
        ?>
</body>
</html>