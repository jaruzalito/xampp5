<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .a1{
            border-top:1px solid black
        }
    </style>
</head>
<body>
    <?php
        $pozycja_zamowienia1 ="spaghetii";
        $ilość1 =  2;
        $cena1 = 15.90;
        $cena11 = number_format($cena1, 2, ',', '.');
        $pozycja_zamowienia2 = "pierogi zbójnickie";
        $ilość2 = 2;
        $cena2 = 17.30;
        $cena22 = number_format($cena2, 2, ',', '.');
        $km = 5;
        $cenazakm = 3;
        $kosztdostawy = $km * $cenazakm;
        if($ilość2>0){$kosztdostawy=0;}
        $suma = ($ilość1 * $cena1)+($ilość2 * $cena2)+$kosztdostawy;
        //rabat
        $rabat =1;
        $sumarabatu =0;
        $ilośćtotalna = $ilość1+$ilość2;
        switch($ilośćtotalna){
            case $ilośćtotalna==3:
                $rabat = 0.1;
                $sumarabatu = $suma*$rabat;
                print "Rabat 10%!";
                break;
            case $ilośćtotalna>3:
                $rabat = 0.2;
                $sumarabatu = $suma*$rabat;
                print "Rabat 20%!";
                break;
        }
        $suma = $suma -$sumarabatu;
        $kosztdostawy = number_format($kosztdostawy, 2, ',','.');
        $suma = number_format($suma,2, ',', '.');
        $sumarabatu = number_format($sumarabatu,2, ',', '.');
        


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
        <td>Dostawa
        <td>-
        <td>$kosztdostawy
        <tr>
        <td>rabat
        <td>-
        <td>-$sumarabatu
        <tr>
        <td class='a1'>Do zapłaty
        <td class='a1'>-
        <td class='a1'>$suma

        </table>
        <h1>Dziekujemy!</h1>
        ";
        if($ilość2>0){
            print "Skorzystano z promocji <b>Dostawa gratis!</b>";
            $kosztdostawy = 0;
        }else{
            print "Nie skorzystano z promocji <b>Dostawa gratis</b><br>
            ilość km: $km<br>
            cena za km: $cenazakm zł
            ";
        }
    ?>
</body>
</html>