<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function ocena($grade){
        switch($grade){
            case 1:
                echo("ocena: 1 "."sporo pracy przed tobą)");
                break;    
            case 2:
                echo("ocena: 2 "."sporo pracy przed tobą)");
                break;
            case 3:
                echo("ocena: 3 jeszcze trochę i będzie ok");
                break;
            case $grade==4||$grade==5||$grade==6:
                echo("ocena: ".$grade." okej");
                break;    
            case $grade>6:
                echo($grade." Niema takiej oceny");
            };   
    }
    $ocenka = 4;
    ocena($ocenka);
    ?>
</body>
</html>