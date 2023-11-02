<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 42</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 42</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>Dane są dwie różne liczby całkowite.<br>
        Napisz program który:<br>
        sprawdza, czy podane dwie liczby całkowite są parzyste i tylko w tym przypadku wypisuje większą z nich. W
        przypadku podania liczby nieparzystej wypisuje, która to liczba lub liczby.</p>
    <h3>Wejście</h3>
    <p>Na wejściu dwie różne liczby całkowite.</p>
    <h3>Wyjście</h3>
    <p>Na wyjściu większa z nich, jeśli obie są parzyste lub ta liczba, lub liczby, jeśli są nieparzyste.<br>
        Przykład 1<br>
        4 8<br>
        8<br>
        Przykład 2<br>
        3 4<br>
        3<br>
        Przykład 3<br>
        1 7<br>
        1<br>
        7</p>
    <hr>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="x1">Podaj pierwszą liczbę: </label>
        <input type="number" id="x1" name="x1">
        <label for="x2">Podaj drugą liczbę: </label>
        <input type="number" id="x2" name="x2">
        <button type="submit">Oblicz</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['x1'], $_POST['x2']) && is_numeric($_POST['x1']) && is_numeric($_POST['x2'])) {
            $x1 = $_POST['x1'];
            $x2 = $_POST['x2'];
            $wypisz = "";
            if ($x1 % 2 == 0 && $x2 % 2 == 0)
                $wypisz = max($x1, $x2);
            else {
                if ($x1 % 2 == 1) $wypisz .= $x1;
                $wypisz .= " ";
                if ($x2 % 2 == 1) $wypisz .= $x2;
            }
            echo "$wypisz";
        }
    }
    ?>
</section>
</body>
</html>