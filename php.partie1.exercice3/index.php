<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8/">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>partie1 Exo 3</title>
    </head>
    <body>
        <p>
            <?php
            $km = 1;
            echo $km;
            ?>
        </p>
        <p>
            <?php
            $km = 3;
            echo $km;
            ?>
        </p>
        <p>
            <?php    
            $km = 125;
            echo $km;
            ?>
        </p>
</body>
</html>


<?php 
            $km = 1;
            echo ('<p>'. $km .'</p>');
            $km = 3;
            echo nl2br("$km\n");
            $km = 125;
            echo ($km);
        ?>