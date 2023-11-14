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
        }
    </style>
</head>
<body>
    <?php
        $pozycja_zamowienia1 ="spaghetii";
        $ilość1 =  1;
        $cena1 = 15.90;
        $cena11 = number_format($cena1, 2, ',', '.');
        $pozycja_zamowienia2 = "carbonara";
        $ilość2 = 2;
        $cena2 = 17.30;
        $cena22 = number_format($cena2, 2, ',', '.');

        $suma = ($ilość1 * $cena1)+($ilość2 * $cena2);
        $suma = number_format($suma,2, ',', '.');
        
        print "<h1>Twoje zamowienie</h1>
        <table>
        <th>nazwa</th>
        <th>ilość</th>
        <th>cena</th>
        <tr>
        <td>$pozycja_zamowienia1</td>
        <td>$ilość1</td>
        <td>$cena11</td>
        <tr>
        <td>$pozycja_zamowienia2</td>
        <td>$ilość2</td>
        <td>$cena22</td>
        <tr>
        <td>Do zapłaty
        <td>-
        <td>$suma
        </table>
        <h1>Dziekujemy!</h1>
        "
    ?>
</body>
</html>