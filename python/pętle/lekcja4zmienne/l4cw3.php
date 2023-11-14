<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $bok1 = 5.20;
        $bok2 = 3;

        $pole = $bok1 * $bok2;
        $pole = number_format($pole, 2, ',', '.');
        $obwod = 2*$bok1 + 2* $bok2;
        $obwod = number_format($obwod, 2, ',', '.');
        $bok1 = number_format($bok1, 2, ',', '.');
        $bok2 = number_format($bok2, 2, ',', '.');
        
        echo<<< figura
        boki prostokata:<br> 1bok=$bok1 <br>2bok=$bok2<br>
        obwód= $obwod <br>
        pole= $pole
        figura;
    ?>
</body>
</html>