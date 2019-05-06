<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Paris, météo</title>
</head>
<body>
    <h1>Meteo de Paris</h1>
    <h2>Aujourd'hui</h2>
    <?php
        print '<img src="https://www.prevision-meteo.ch/uploads/widget/paris_0.png" width="650" height="250" />';
    ?>
    <h2>Jour + 1</h2>
    <?php
        $day2 = "https://www.prevision-meteo.ch/uploads/widget/paris_1.png";
        print '<img src="https://www.prevision-meteo.ch/uploads/widget/paris_1.png" width="650" height="250" />';
    ?>
    <h2>Jour + 2</h2>
    <?php
        print '<img src="https://www.prevision-meteo.ch/uploads/widget/paris_2.png" width="650" height="250" />';
    ?>
    <h2>Jour + 3</h2>
    <?php
        print '<img src="https://www.prevision-meteo.ch/uploads/widget/paris_3.png" width="650" height="250" />';
    ?>
    <h2>Jour + 4</h2>
    <?php
        print '<img src="https://www.prevision-meteo.ch/uploads/widget/paris_4.png" width="650" height="250" />';
    ?>
</body>
</html>
