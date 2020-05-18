<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak-lightblue{
            height : 30px;
            width : 30px;
            line-height : 30px;
            border : 2px solid black;
            text-align : center;
            margin : 1px;
            float : left;
            margin-right : 7px;
            background-color: lightblue;
        }
    .kotak-salmon{
            height : 30px;
            width : 30px;
            line-height : 30px;
            border : 2px solid black;
            text-align : center;
            margin: 1px;
            float : left;
            margin-right : 7px;
            background-color: salmon;
        }
        .clear{
            clear : both;
        }
    </style>
</head>
<body>
<body>
<?php for($i=1;$i<=6;$i++): ?>
    <?php for($j=1;$j<=6;$j++): ?>
        <?php if(($i + $j)%2 == 0): ?>
            <div class="kotak-lightblue"></div>
        <?php else: ?>
            <div class="kotak-salmon"></div>
        <?php endif; ?>
    <?php endfor; ?>
    <div class="clear"></div>
<?php endfor; ?>    





    
</body>
</html>