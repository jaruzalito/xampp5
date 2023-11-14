<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = rand(10,99);
    $y = rand(10,99);

    ECHO("Pierwsza liczba: ".$x."<br>Druga liczba: ".$y);

    $iloraz=$x/$y;
    $po3=round($iloraz,3);
    echo("<br>WYNIK dzielenia x/y: ".$iloraz);
    echo("<br>Zaokraglony do 3 miejsc po przecniku: ".$po3);
    $ilorazgora=ceil($iloraz);
    Echo("<br><br>Zaokroglane do gory: ".$ilorazgora);
    $iloraz=floor($iloraz);
    Echo("<br><br>Zaokroglane w dół: ".$iloraz);
    ?>
</body>
</html>