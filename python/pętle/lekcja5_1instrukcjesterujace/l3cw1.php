<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 13.2;
        
        print "a: $a<br>
        b: $b<br>";

        if($a>$b){
            print "liczba $a jest wieksza";
        }
        else if($a<$b){
            print "liczba $b jest wieksza";
        }else{
            print "liczby sa równe";
        }
    ?>
</body>
</html>