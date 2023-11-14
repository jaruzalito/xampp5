<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("ETOPLN",4.64);

        $euro = 16;
        $pln = ETOPLN*$euro;
        $pln = number_format($pln, 2, ',','.');
        $euro = number_format($euro, 2, ',','.');
        print "$euro euro to $pln zlotych";

    ?>
</body>
</html>