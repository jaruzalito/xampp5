<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            print "<i style= 'color:red'>adam</i>";
            print "<br><i style= \"color:brown\">fortnaj</i>";
        ?>
    </h1>
    <h2>
        heredoc
    </h2>
    <h1>
        <?php
            echo<<<SPERMA
            <h1>KOCHAM FORTNITE<br>
            i duze armaty<br>
            <ins>bimbim\tbambam</ins></h1>
            SPERMA;
        ?>
    </h1>
</body>
</html>