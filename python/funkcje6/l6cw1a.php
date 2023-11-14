<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Returnem<br></h1>
    <?php
    function dodawanie($a,$b){
        return $a+$b;
    };
    $x=5;
    $y=12;
    echo($x."+".$y."=".dodawanie($x,$y));
    echo("<br>");
    $p=100;
    $q=-19;
    echo($p."+".$q."=".dodawanie($p,$q));
    ?>
</body>
</html>