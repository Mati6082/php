<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T103</title>
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
    <h2>T103</h2>
    <p>
        Napisz funkcję, która dla podanej liczby całkowitej w zakresie od 1 do 12 zwraca nazwę miesiąca w języku
        polskim. W przypadku podania innej wartości zwraca informację o błędzie.
    </p>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="miesl">Podaj liczbę od 1 do 12: </label><input type="number" id="miesl" name="miesl">
        <button type="submit">Wykonaj</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['miesl']) && is_numeric($_POST['miesl'])) {
            $miesl = $_POST['miesl'];

            function miesiac($mies) {
                switch ($mies) {
                    case(1):
                        return 'styczeń';
                    case(2):
                        return 'luty';
                    case(3):
                        return 'marzec';
                    case(4):
                        return 'kwiecień';
                    case(5):
                        return 'maj';
                    case(6):
                        return 'czerwiec';
                    case(7):
                        return 'lipiec';
                    case(8):
                        return 'swierpień';
                    case(9):
                        return 'wrzesień';
                    case(10):
                        return 'październik';
                    case(11):
                        return 'listopad';
                    case(12):
                        return 'grudzień';
                    default:
                        return 'zły miesiąc :(';
                }
            }

            echo "<p>$miesl miesiąc to ".miesiac($miesl)."</p>";
        }
    }
    ?>
</section>
</body>
</html>