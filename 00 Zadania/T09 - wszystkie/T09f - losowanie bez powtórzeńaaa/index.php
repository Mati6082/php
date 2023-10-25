<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T09f</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>
        Napisz program, który do dwuwymiarowej tablicy o wymiarach 7 × 7 wpisuje pseudolosowe liczby całkowite z zakresu
        <10,99> i wyświetla tę tablicę z zachowaniem wierszy i kolumn.<br>
        Liczby nie mogą się powtarzać.
    </p>
    <hr>
</header>
<section>
    <?php
    $wylosowane = array();
    echo "<table>";
    for ($i = 0; $i < 7; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            echo "<td>";
            $wylosowanaLiczba = rand(10, 99);
            while (in_array($wylosowanaLiczba, $wylosowane))
                $wylosowanaLiczba = rand(10, 99);
            echo "$wylosowanaLiczba";
            array_push($wylosowane, $wylosowanaLiczba);
            echo "</td>";
        }
        echo "</tr>";
    } echo "</table>";
    ?>
</section>
</body>
</html>