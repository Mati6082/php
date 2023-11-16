<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T115</title>
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
    <h2>T115</h2>
    <p>
        Napisz funkcję, która na podstawie danych pobranych z tablicy zwracanej przez funkcję getdate() wyświetli bieżącą datę. W dacie miesiąc ma być wyświetlony w postaci tekstu w języku polskim.
    </p>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <button type="submit">Wykonaj</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        function getdate() {
            return explode(".", date("n.d.Y"));
        }

        $dataTab = getdate();

        function wypiszDate(&$dataTab) {
            $dzien = $dataTab[1];
            $rok = $dataTab[2];
            $miesiacL = $dataTab[0];

            $miesiac = match ($miesiacL) {
                1 => "styczeń",
                2 => "luty",
                3 => "marzec",
                4 => "kwiecień",
                5 => "maj",
                6 => "czerwiec",
                7 => "lipiec",
                8 => "sierpień",
                9 => "wrzesień",
                10 => "październik",
                11 => "listopad",
                12 => "grudzień",
            };
        }
    }
    ?>
</section>
</body>
</html>