<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1c</title>
    <style>
        .kotak{
            background-color : pink;
            border-radius : 100%;
            height : 30px;
            width : 30px;
            padding : auto;
            line-height : 30px;
            border : 1px solid black;
            text-align : center;
            margin-bottom : 5px;
            float : left;
            margin-right : 7px;

        }
        .clear{
            clear : both;
        }
    </style>
</head>
<body>
<?php for($i=1;$i<=3;$i++): ?>
<?php for($j=1;$j<=$i;$j++): ?>
<div class="kotak"><?=$i;?></div>
<?php endfor; ?>
<div class="clear"></div>
<?php endfor; ?>    
</body>
</html>