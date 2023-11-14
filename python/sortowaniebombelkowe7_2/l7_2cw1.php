<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo("Witamy dnia ".date("d.m.Y"));
    $dzien=date("l");
    echo("<br>");
    if ($dzien=="Monday"){
        $dzien="Poniedziałek";
    }else if ($dzien=="Tuesday"){
        $dzien="Wtorek";
    }else if ($dzien=="Wednesday"){
        $dzien="Środe";
    }else if ($dzien=="Thursday"){
        $dzien="Czwartek";
    }else if ($dzien=="Friday"){
        $dzien="Piątek";
    }else if ($dzien=="Saturday"){
        $dzien="Sobote";
    }else if ($dzien=="Sunday"){ 
        $dzien="Niedziele";
    }

    $miesiac = date("F");
    if($miesiac=="January"){
        $miesiac="Stycznia";
    }else if($miesiac=="February"){
        $miesiac="Lutego";
    }else if($miesiac=="March"){
        $miesiac="Marca";
    }else if($miesiac=="April"){
        $miesiac="Kwietnia";
    }
    else if($miesiac=="June"){
        $miesiac="Czerwca";
    }
    else if($miesiac=="July"){
        $miesiac="Sierpnia";
    }
    else if($miesiac=="September"){
        $miesiac="Września";
    }
    else if($miesiac=="October"){
        $miesiac="Października";
    }
    else if($miesiac=="November"){
        $miesiac="Listopada";
    }
    else if($miesiac=="Grudnia"){
        $miesiac="Lutego";
    }

    echo("Witamy w ".$dzien.", dnia ".date("d ").$miesiac.date(" Y"));
    ?>
</body>
</html>