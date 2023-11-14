<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tab=array("MarcDeMarco","Arctic Monkeys","RockTower","Fortnite","Lana");
    $tab2=array("My Kind of Women","5O5","RockLovers","BatllePass","1987r");

    print("<br><br>A)<br><br>");

    $wsp=array_combine($tab,$tab2);
    print("<pre>");
    print_r($wsp);
    print("</pre>");

    print("<br><br>B)<br><br>");

    krsort($wsp);
    print("<pre>");
    print_r($wsp);
    print("</pre>");

    print("<br><br>B)<br><br>");
    array_push($wsp,"Kocahmrzycie");   
    asort($wsp);
    foreach($wsp as $key => $odp){
        print($key."=>".$odp."<br>");
    }
    ?>
</body>
</html>