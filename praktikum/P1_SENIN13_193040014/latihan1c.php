<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .circle{
        height: 25px;
        width: 25px;
        background-color: salmon;
        border-radius: 40px;
        border: 2px solid black;
        text-align: center;
        line-height: 25px;
        margin-bottom: 10px;
        margin-right: 5px;
        display: inline-block;
    }
    
    </style>
</head>
<body>
    
<?php
$a = "A";
echo '<div class="circle">' . $a . '</div>';
echo "</br>";

$b = "B";
echo '<div class="circle">' . $b . '</div>' . '<div class="circle">' . $b . '</div>';
echo "</br>";

$c = "C";
echo '<div class="circle">' . $c . '</div>' . '<div class="circle">' . $c . '</div>' . '<div class="circle">' . $c . '</div>';
echo "</br>";

?>


</body>
</html>