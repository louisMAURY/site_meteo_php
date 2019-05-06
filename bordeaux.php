<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bordeaux, météo</title>
</head>
<body>
    <h1>Meteo de Bordeaux</h1>
    <h2>Aujourd'hui</h2>
    <?php
        print '<img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_0.png" width="650" height="250" />';
    ?>
    <h2>Jour + 1</h2>
    <?php
        $day2 = "https://www.prevision-meteo.ch/uploads/widget/paris_1.png";
        print '<img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_1.png" width="650" height="250" />';
    ?>
    <h2>Jour + 2</h2>
    <?php
        print '<img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_2.png" width="650" height="250" />';
    ?>
    <h2>Jour + 3</h2>
    <?php
        print '<img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_3.png" width="650" height="250" />';
    ?>
    <h2>Jour + 4</h2>
    <?php
        print '<img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_4.png" width="650" height="250" />';
    ?>
</body>
</html>
