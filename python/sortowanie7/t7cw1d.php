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
    Ja łagodnie uśmiechnięta
    ";

    $jest = strstr($tekst,'ą',true);

    if($jest==true){
        print("jest ą");
    }else{
        print("brak litery ą");
    }
    ?>
</body>
</html>