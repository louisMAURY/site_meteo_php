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
        $day1 = "https://www.prevision-meteo.ch/uploads/widget/bordeaux_0.png";
        print '<img src="$day1" alt="meteo pour le Jour 1 />';
    ?>
    <h2>Jour + 1</h2>
    <?php
        $day2 = "https://www.prevision-meteo.ch/uploads/widget/bordeaux_1.png";
        print '<img src="$day2" alt="meteo pour le Jour 2 />';
    ?>
    <h2>Jour + 2</h2>
    <?php
        $day3 = "https://www.prevision-meteo.ch/uploads/widget/bordeaux_2.png";
        print '<img src="$day3" alt="meteo pour le Jour 3 />';
    ?>
    <h2>Jour + 3</h2>
    <?php
        $day4 = "https://www.prevision-meteo.ch/uploads/widget/bordeaux_3.png";
        print '<img src="$day4" alt="meteo pour le Jour 4 />';
    ?>
    <h2>Jour + 4</h2>
    <?php
        $day5 = "https://www.prevision-meteo.ch/uploads/widget/bordeaux_0.png";
        print '<img src="$day5" alt="meteo pour le Jour 5 />';
    ?>
</body>
</html>