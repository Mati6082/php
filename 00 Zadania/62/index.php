<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 62</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 62</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>
        Napisz program, który dla podanej wartości wyświetla ocenę wyrażoną słownie według następującego klucza:<br>
        0 – nieklasyfikowany<br>
        1,2,3 – poprawny<br>
        4,5 – dobry<br>
        6 – wyróżniający.<br>
        Na pozostałe wartości reaguje wyświetleniem komunikatu: „niewłaściwa liczba”.
    </p>
    <hr>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="x">Podaj liczbę całkowitą: </label>
        <input type="number" id="x" name="x">
        <button type="submit">Oblicz</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['x']) && is_numeric($_POST['x'])) {
            $x = $_POST['x'];
            switch ($x) {
                case 0:
                    echo "nieklasyfikowany";
                    break;
                case 1:
                case 2:
                case 3:
                    echo "poprawny";
                    break;
                case 4:
                case 5:
                    echo "dobry";
                    break;
                case 6:
                    echo "wyróżniający";
                    break;
                default:
                    echo "niewłaściwa liczba";
            }
        }
    }
    ?>
</section>
</body>
</html>