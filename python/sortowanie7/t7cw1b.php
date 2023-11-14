<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $length = mb_strlen("Ooo, ale jazz! 
    Hardkorowo pada deszcz 
    Tak na maksa wieje też 
    Ja łagodnie uśmiechnięta 
    Błyska gdzieś 
    Na mej dłoni czuję dreszcz 
    Moje oczy błyszczą też 
    Ja łagodnie uśmiechnięta 
    Ooooo, hardkorowo pada deszcz 
    Ja łagodnie uśmiechnięta
    ");

    $ilosc = str_word_count("Ooo, ale jazz! 
    Hardkorowo pada deszcz 
    Tak na maksa wieje też 
    Ja łagodnie uśmiechnięta 
    Błyska gdzieś 
    Na mej dłoni czuję dreszcz 
    Moje oczy błyszczą też 
    Ja łagodnie uśmiechnięta 
    Ooooo, hardkorowo pada deszcz 
    Ja łagodnie uśmiechnięta");

    printf("Tekst składa się z %.2f znaków oraz %.3f słów",$length,$ilosc)
    ?>
    
</body>
</html>