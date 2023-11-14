<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function formatowanie($tekst){
        echo('<p style="color:blue; font-size:larger; text-decoration:underline; font-family: Verdana;">'.$tekst);
    };
    $tekscik = "kocham fortnite";
    formatowanie($tekscik);
    ?>
</body>
</html>