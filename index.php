<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel=”stylesheet” type=”text/css” href=”css/<?php echo($css)?>” />
    <title>La météo</title>
<body>
    <?php
        $date = getdate();

        switch($hours = $date["hours"])
        {
            case($hours < 7):
            $css = "nuit.css";
            
            case($hours > 7):
            $css = "jour.css";

            case($hours > 19):
            $css = "nuit.css";
        }
    ?>
    <h1>La meteo !</h1>

    <p>nous somme le : <?php echo date('j/m/y') ?></p>

    <p>Vous voulez la météo ?
    D'accord mais de quelle ville ?</p>

    <ul>
        <li><a id="meteo-paris" href="paris.php" alt="lien vers la meteo de paris">Paris, la ville lumière</a></li>
        <li><a id="meteo-bordeaux" href="bordeaux.php" alt="lien vers la meteo de bordeaux">Bordeaux, la ville du vin</a></li>
    </ul>
</body>
</html>
