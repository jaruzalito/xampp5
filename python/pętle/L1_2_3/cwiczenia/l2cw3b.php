<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border:1px solid black;
            border-collapse:collapse;
            padding:5px;
            width:33%;
        }
    </style>
</head>
<body>
    <?php
        echo<<<TABELA
        <table style='border:1px black'>
        <tr>
        <th>
        <th>Kolumna1</th>
        <th>Kolumna2</th>
        <tr>
        <td>Wiersz1
        <td>kom11
        <td>kom12
        <tr>
        <td>Wiersz2
        <td>kom21
        <td>kom22
        </table>
        TABELA;
    ?>
</body>
</html>