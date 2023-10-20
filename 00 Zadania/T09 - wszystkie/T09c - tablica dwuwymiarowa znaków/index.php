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
    <h1>Zadanie T09c</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>Napisz program, który do dwuwymiarowej tablicy o wymiarach 7 × 7 wpisze wygenerowane losowo znaki w zakresie
        <'a','e'>, wyświetli tę tablicę, a następnie:
    </p>
    <ul>
        <li>wypisze ile razy w tablicy wystąpiła litera 'a',</li>
        <li>wyświetli te numery wierszy, w których najczęściej wystąpiła litera 'b'.</li>
    </ul>
    <hr>
</header>
<section>
    <?php
    $tablicaLiczb = array();
    $iloscA = 0;
    echo "<table>";
    for ($i = 0; $i < 7; $i++) {
        echo "<tr id='$i'>";
        for ($j = 0; $j < 7; $j++) {
            echo "<td>";
            $liczba = chr(rand(97, 101));
            $tablicaLiczb[$i][$j] = $liczba;
            echo "$liczba</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            if ($tablicaLiczb[$i][$j] == 'a') $iloscA += 1;
        }
    }
    $iloscB = array_fill(0, 7, 0);
    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            if ($tablicaLiczb[$i][$j] == 'b') $iloscB[$i] += 1;
        }
    }
    $maxIndex = array_search(max($iloscB), $iloscB) + 1;
    echo "<h2>Litera a występuje w tablicy $iloscA razy</h2>";
    echo "<h2>Litera b występuje najczęściej w rzędzie $maxIndex</h2>"
    ?>
</section>
</body>
</html>