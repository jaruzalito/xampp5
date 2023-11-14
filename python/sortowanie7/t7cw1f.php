<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tekst = "oo, ale jazz! 
    Hardkorowo pada deszcz 
    Tak na maksa wieje też 
    Ja łagodnie uśmiechnięta 
    Błyska gdzieś 
    Na mej dłoni czuję dreszcz 
    Moje oczy błyszczą też 
    Ja łagodnie uśmiechnięta 
    Ooooo, hardkorowo pada deszcz 
    Ja łagodnie uśmiechnięta";

    $tekst2 = strstr(strrev($tekst),'z',true);
    $pos = strripos($tekst,'j');
    print("Indeks ostatniego J: ".$pos."<br>");
    
    
    print(strrev($tekst2))
    // $pos = strripos($tekst,'j');
    // print($pos);
    // echo "<br>";
    // print(substr($tekst,$pos,mb_strlen($tekst)-$pos))
    ?>
</body>
</html>