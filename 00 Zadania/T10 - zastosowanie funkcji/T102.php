<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T102</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <table>
        <tr>
            <td>Imię i nazwisko:</td>
            <td>Klasa/grupa:</td>
            <td>Data:</td>
        </tr>
        <tr>
            <td>Mateusz Pakuła</td>
            <td>3ip gr2</td>
            <td>2.11.2023r.</td>
        </tr>
    </table>
    <h2>T102</h2>
    <p>
        Napisz funkcję, której wynikiem będzie podniesienie wartości przekazanego jej poprzez referencję argumentu do potęgi przekazanej również jako argument. Funkcja zwraca wartość i wyświetla wynik w postaci (np. dla wartości 2 i 3):<br><br>
        x = 2<br>
        y = 3<br>
        x<sup>y</sup>=2<sup>3</sup>=8<br>
    </p>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="x">Podaj liczbę x: </label><input type="number" id="x" name="x">
        <label for="y">Podaj liczbę y: </label><input type="number" id="x" name="y">
        <button type="submit">Wykonaj</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['x'], $_POST['y']) && is_numeric($_POST['x']) && is_numeric($_POST['y'])) {
            $x = $_POST['x'];
            $y = $_POST['y'];
            function potega(&$x, $y) {
                $wynik = 1;
                for ($i = 0; $i < $y; $i++) {
                    $wynik *= $x;
                } return $wynik;
            }

            echo "<p>x<sup>y</sup>=$x<sup>$y</sup>=".potega($x,$y)."</p>";
        }
    }
    ?>
</section>
</body>
</html>