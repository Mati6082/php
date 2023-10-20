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
    <h1>Zadanie T09b</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>Napisz program, który do dwuwymiarowej tablicy o wymiarach 3 × 3 wpisuje liczby pseudolosowe z zakresu <0,9>,
        wyświetla tę tablicę, a następnie oblicza sumę liczb rozmieszczonych wzdłuż przekątnych:
    </p>
    <ol>
        <li>Przekątna LG_PD - lewy górny i prawy dolny,</li>
        <li>Przekątna LD_PG - lewy dolny i prawy górny.</li>
    </ol>
    <p>
        Program wyświetla te sumy i odpowiada na pytanie, która z nich jest większa, lub czy są równe.
    </p>
    <hr>
</header>
<section>
    <?php
    $tablicaLiczb = array();
    echo "<table>";
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            echo "<td>";
            $liczba = rand(0, 9);
            $tablicaLiczb[$i][$j] = $liczba;
            echo "$liczba</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    $sumaLG_PD = $tablicaLiczb[0][0] + $tablicaLiczb[1][1] + $tablicaLiczb[2][2];
    $sumaLD_PG = $tablicaLiczb[0][2] + $tablicaLiczb[1][1] + $tablicaLiczb[2][0];
    echo "<h2>Suma przekątna LG_PD = $sumaLG_PD";
    if ($sumaLG_PD == $sumaLD_PG) echo " == ";
    else if ($sumaLG_PD > $sumaLD_PG) echo " > ";
    else echo " < ";
    echo "$sumaLD_PG = suma przekątna LD_PG</h2>";
    ?>
</section>
</body>
</html>