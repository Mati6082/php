<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 86</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 86</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>
        Napisz program, który dla podanej liczby całkowitej a losuje a liczb w zakresie <1, 9>.i wyświetla je na ekranie
        w postaci: liczba i liczba znaków ‘|’.<br><br>
        Przykład a = 5<br>
        Wylosowane liczby: 5 3 6 3 1<br>
        5|||||<br>
        3|||<br>
        6||||||<br>
        3|||<br>
        1|<br>
    </p>
    <hr>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="a">Podaj a: </label>
        <input type="number" id="a" name="a">
        <button type="submit">Oblicz</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['a']) && is_numeric($_POST['a'])) {
            $a = $_POST['a'];
            for ($i = 0; $i < $a; $i++) {
                $wylosowana = rand(1, 9);
                echo "<p>";
                echo " $wylosowana";
                for ($j = 0; $j < $wylosowana; $j++) {
                    echo " | ";
                }
                echo "</p>";
            }
        }
    }
    ?>
</section>
</body>
</html>