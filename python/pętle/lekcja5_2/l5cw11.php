<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print "1 sposob:";
    $przedmioty=["polski","angielski","hiszpanski","bazy danych","historia"];
    for($i=0;$i<sizeof($przedmioty);$i++){
        print $przedmioty[$i]." ";
    }
    print "<br>2 sposob:";
    foreach ($przedmioty as $przedmiot) {
        print $przedmiot." ";
    }
    print "<br>3 sposob:";
    print_r($przedmioty);
    print "<br>4 sposob:";
    for($i=0;$i<count($przedmioty);$i++){
        print $przedmioty[$i]." ";
    }
    ?>
</body>
</html>