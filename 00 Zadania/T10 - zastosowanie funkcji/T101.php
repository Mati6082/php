<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T101</title>
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
    <h2>T101</h2>
    <p>
        Napisz funkcję, która dla podanej liczby zwraca (return) jej wartość bezwzględną i zastosuj tę funkcję do
        wyświetlenia wyniku. Do obliczenia wartości bezwzględnej użyj instrukcji warunkowej (wariant 1) i operatora
        warunkowego "?" (wariant 2).
    </p>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="liczba">Podaj liczbę: </label><input type="number" id="liczba" name="liczba">
        <button type="submit">Wykonaj</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['liczba']) && is_numeric($_POST['liczba'])) {
            $liczba = $_POST['liczba'];
            function bezw1($liczba) {
                if ($liczba >= 0) return $liczba;
                else return -$liczba;
            }

            function bezw2($liczba) {
                return $liczba >= 0 ? $liczba : -$liczba;
            }

            echo "<p>Wariant 1: ".bezw1($liczba)."</p>";
            echo "<p>Wariant 2: ".bezw2($liczba)."</p>";
        }
    }
    ?>
</section>
</body>
</html>