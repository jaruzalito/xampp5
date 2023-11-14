<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tab = ['ksiazka','rzecz','snusy','spotify','laptok'];
    print_r($tab);
    print("<br>2.<br>");
    var_dump($tab);
    print("<br>3.<br>");
    var_export($tab);

    print("<br><br>B)<br><br>");
    sort($tab);
    print_r($tab);

    print("<br><br>C)<br><br>");
    array_unshift($tab,"pomidor");
    print_r($tab);
    print("<br>ilosc elementow: ".sizeof($tab));

    print("<br><br>D)<br><br>");
    array_pop($tab);
    rsort($tab);
    print_r($tab);

    print("<br><br>E)<br><br>");
    echo("<pre>Lista Zakupow");
    print_r($tab);
    echo("</pre>");

    print("<br><br>E)<br><br>");

    echo<<<LISTA
    <h1>Lista Zakupów</h1>
    <ol>
    <li>$tab[0]</li>
    <li>$tab[1]</li>
    <li>$tab[2]</li>
    <li>$tab[3]</li>
    <li>$tab[4]</li>
    </ol
    LISTA;

    ?>
</body>
</html>