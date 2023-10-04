<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 7</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>Napisz program, który dla podanej temperatury w stopniach Celsjusza zamienia ją na stopnie Kelwina i
        Fahrenheita.</p>
    <hr>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="temp">podaj temperaturę w <sup>o</sup>C:</label>
        <input type="text" id="temp" name="temp">
        <button type="submit">Oblicz</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $temp = $_POST['temp'];

        echo "<h4>Wynik obliczeń dla T<sub>Celcjusz</sub> = $temp</h4>";
        $tempk = $temp + 273.15;
        echo "<p>T<sub>Kelvin</sub> = $tempk<br>";
        $tempf = $temp * 1.8 + 32;
        echo "T<sub>Fahrenheit</sub> = $tempf</p><br>";
    }
    ?>
</section>
</body>
</html>