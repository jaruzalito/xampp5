<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tab=[];
    foreach(range(13,390,13) as $number){
        array_push($tab,$number);
    }
    print_r($tab);
    print("<br><br>");
    foreach($tab as $num){
        print($num."=>");
    }

    print("<br><br>");
    echo implode("=>",$tab);

    print("<br><br>B)<br><br>");

    if(!file_exists('l2_2funkcje')){
        mkdir("c:/xampp/htdocs/T7_2/l2_2funkcje");
        echo("Został utworzony katalog");
    }else{
        echo("Katalog itnieje");
    }
    $file = fopen('l2_2funkcje/ciag.txt','a+');
    $y=implode("=>",$tab);
    fwrite($file,$y);
    fclose($file);
    ?>
</body>
</html>