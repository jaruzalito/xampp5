<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function formatowanie($tekst,$kolor,$size,$font1){
        echo('<p style="color:'.$kolor.'; font-size:'.$size.'; text-decoration:underline; font-family:'.$font1.';">'.$tekst);
    };
    $tekscik = "kocham fortnite";
    $color = "red";
    $textsize = "large";
    $fontrodzaj = 'Helvetica';
    formatowanie($tekscik,$color,$textsize,$fontrodzaj);
    ?>
</body>
</html>