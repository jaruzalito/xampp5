<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $color = "czarny";

        switch($color){
            case "czerwony":
                print "Twoim ulubionym kolorem jest czerwony";
                break;
            case "zielony":
                print "Twoim ulubionym kolorem jest zielony";
                break;
            case "niebieski":
                print "Twoim ulubionym kolorem jest niebieski";
                break;
            default:
                print "twoim ulubionym kolorem nie jest ani zieloony ani czerwony ani niebieski";
        }
    ?>
    
</body>
</html>