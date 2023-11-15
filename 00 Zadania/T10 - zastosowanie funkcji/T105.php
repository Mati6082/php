<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T105</title>
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
    <h2>T105</h2>
    <p>
        Napisz funkcję, która dla dwóch liczb całkowitych wyświetla ich wspólny dzielnik (przypomnij sobie algorytm Euklidesa).
    </p>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="a">Podaj liczbę: </label><input type="number" id="a" name="a">
        <label for="b">Podaj liczbę: </label><input type="number" id="b" name="b">
        <button type="submit">Wykonaj</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['a'], $_POST['b']) && is_numeric($_POST['a']) && is_numeric($_POST['b'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            function NWD($a, $b) {
                while ($a != $b) {
                $a = $a > $b ? $a - $b : $a;
                $b = $b > $a ? $b - $a : $b;
                } return $a;
            }

            echo "<p>Największy wspólny dzielnik liczb $a i $b wynosi ".NWD($a, $b)."</p>";
        }
    }
    ?>
</section>
</body>
</html>