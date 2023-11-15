<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T104</title>
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
    <h2>T104</h2>
    <p>
        Napisz funkcję, która będzie przyjmowała dwa argumenty liczbowe i będzie wypisywała mniejszą z nich w kolorze zielonym, a większą w czerwonym. W przypadku podania liczb jednakowych obie należy wyświetlić w kolorze niebieskim.
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
            function wypiszLiczby($a, $b) {
                if ($a > $b) return "<span id='wieksza'>$a</span> jest większą liczbą od <span id='mniejsza'>$b</span>";
                else if ($a < $b) return "<span id='mniejsza'>$a</span> jest mniejszą liczbą od <span id='wieksza'>$b</span>";
                else return "<span id='rowne'>$a</span> jest taką samą liczbą jak <span id='rowne'>$b</span>";
            }

            echo "<p>".wypiszLiczby($a, $b)."</p>";
        }
    }
    ?>
</section>
</body>
</html>