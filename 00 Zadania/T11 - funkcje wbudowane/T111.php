<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T111</title>
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
    <h2>T111</h2>
    <p>
        Dana jest tablica zawierająca liczby. Napisz funkcję, która po otrzymaniu tej tablicy jako argumentu zwraca sumę
        dwóch najmniejszych liczb zapisanych w tablicy.
    </p>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <button type="submit">Wykonaj</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tab = array();

        for ($i = 0; $i < 10; $i++) {
            $tab[] = rand(1, 20);
        }


        echo "Przed sort:ㅤ";
        foreach ($tab as $item) {
            echo "$item ";
        }
        echo "<br>";

        sort($tab);

        echo "Po sort: ㅤㅤ";
        foreach ($tab as $item) {
            echo "$item ";
        }
        echo "<br>";

        $suma = $tab[0] + $tab[1];
        echo "Suma dwóch najmniejszych wartości z tablicy wynosi $suma";
    }
    ?>
</section>
</body>
</html>