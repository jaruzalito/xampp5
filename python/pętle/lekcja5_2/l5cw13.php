<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $polityka =array(
            "Pis"=>"20%",
            "PO"=>"10%",
            "Konfederacja"=>"40%",
            "Polska 2050"=>"15%",
            "Koalicja Obywatelska"=>"10%",
            "Lewica"=>"5%"
        );

        foreach($polityka as $platforma=>$procenty){
            echo $platforma.": ".$procenty."<br>";
        }
        print"<br><br>";
        print_r($polityka);

        
    ?>
</body>
</html>