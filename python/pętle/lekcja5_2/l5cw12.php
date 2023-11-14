<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $szkoła =array(
        "polski"=>"4,72",
        "niemiecki"=>"2,76",
        "WOS"=>"3,22",
        "PP"=>"5,00",
        "WF"=>"5,98"
    );

    foreach($szkoła as $przedmiot=>$ocena){
        echo $przedmiot.": ".$ocena."<br>";
    }
    print "<br>drugi sposób:<br>";
    print_r($szkoła);
    print "<br>";
    foreach($szkoła as $przedmiot){
        echo $przedmiot." <br>";
    }
    ?>
</body>
</html>