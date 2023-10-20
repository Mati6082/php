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
    <h1>Zadanie T09d</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>
        Napisz program, który tworzy dwuwymiarową tablicę o wymiarach 4 × 4 i wypełnia ją liczbami pseudolosowymi z
        zakresu <0,1>, wyświetla tę tablicę z zachowaniem wierszy i kolumn, a następnie:
    </p>
    <ul>
        <li>wyświetla te wiersze tablicy, w których suma liczb jest największa,</li>
        <li>tworzy "odwróconą" tablicę (ostatni wiersz pierwszej tablicy jest pierwszą kolumną drugiej i tak dalej —
            tablica wygląda jak obrócona w prawo o 90°), a następnie wyświetla ją na ekranie.
        </li>
    </ul>
    <p>
        przykład odwrócenia<br><br>
        0001<br>
        0010<br>
        0100<br>
        0100<br><br>
        tablica po odwróceniu:<br><br>
        0000<br>
        1100<br>
        0010<br>
        0001<br>
    </p>
    <hr>
</header>
<section>
    <?php
    $tablicaLiczb = array();
    echo "<table>";
    for ($i = 0; $i < 4; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 4; $j++) {
            echo "<td id='$i$j'>";
            $liczba = rand(0, 1);
            $tablicaLiczb[$i][$j] = $liczba;
            echo "$liczba</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    #for ($i = 0; $i < 7; $i++) {
    #    for ($j = 0; $j < 7; $j++) {
    #        if ($tablicaLiczb[$i][$j] == 'a') $iloscA += 1;
    #    }
    #}
    $suma = array_fill(0, 4, 0);
    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            $suma[$i] += $tablicaLiczb[$i][$j];
        }
    }
    $maxWiersz = array_search(max($suma), $suma) + 1;

    echo "<h2>Największa suma liczb występuje w wierszu $maxWiersz</h2>";

    echo "<h2>Odwrócona tablica: ";
    echo "<table>";
    for ($i = 0; $i < 4; $i++) {
        echo "<tr>";
        for ($j = 3; $j >= 0; $j--) {
            $liczba = $tablicaLiczb[$j][$i];
            echo "<td>$liczba</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</section>
</body>
</html>