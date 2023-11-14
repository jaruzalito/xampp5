<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = 5;
    $silnia = 1;
    for($i=1;$i<=$n;$i++){
        $silnia *= $i;
    }
    print "$n! wynosi: $silnia";
    ?>
</body>
</html>