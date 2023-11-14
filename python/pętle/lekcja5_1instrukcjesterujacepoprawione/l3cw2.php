<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 1;
        $b = 4;
        $c = 15.5;

        $delta = $b*$b-4*($a*$c);
        $delta1=number_format($delta, 2, ',','.');
        $a1 = number_format($a, 2, ',','.');
        $b1 = number_format($b, 2, ',','.');
        $c1 = number_format($c, 2, ',','.');
        if($delta>0){
        $x1 = -1*$b-sqrt($delta)/2*$a;
        $x2 = -1*$b+sqrt($delta)/2*$a;

        $x1 = number_format($x1, 10, ',','.');
        $x2 = number_format($x2, 10, ',','.');
        print "a: $a1<br>b: $b1<br>c: $c1<br>";

        print "delta: $delta<br>pierwiastki: x1= $x1 , x2 = $x2";
        }else if($delta==0){
            $x0 = -1*$b/2*$a;
            $x0 = number_format($x0,10,',','.');
            print "a: $a1<br>b: $b1<br>c: $c1<br>";
            print "delta: $delta1<br>";
            print "Jedno miejsce zerowe x0 =  $x0";
        }
        else{
            print "a: $a1<br>b: $b1<br>c: $c1<br>";
            print "delta: $delta1<br>";
            print "brak miejsc zerowych!<br>Delta mniejsza niz 0";
        }
    ?>
</body>
</html>