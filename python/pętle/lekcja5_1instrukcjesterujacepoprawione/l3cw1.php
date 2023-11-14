<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 5.4;
        $b = 13.2;
        
        $a1 = number_format($a,2,',','.');
        $b1 = number_format($b,2,',','.');
        print "a: $a1<br>
        b: $b1<br>";
        if($a>$b){
            print "liczba a:$a1 jest wieksza";
        }
        else if($a<$b){
            print "liczba b:$b1 jest wieksza";
        }else{
            print "liczby sa równe";
        }

    ?>
</body>
</html>