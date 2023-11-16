<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T113</title>
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
    <h2>T113</h2>
    <p>
        Dane są dwie tablice. Napisz funkcję, która otrzymuje obie tablice w argumencie i zwraca posortowaną tablicę zawierającą wszystkie elementy z pierwszej i drugiej tablicy.
    </p>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <button type="submit">Wykonaj</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tab1 = array();
        $tab2 = array();

        for ($i = 0; $i < 10; $i++) {
            $tab1[] = rand(1, 9);
            $tab2[] = rand(1, 9);
        }
        
        echo "Tab1: ";
        foreach ($tab1 as $item) {
            echo "$item ";
        } echo "<br>";

        echo "Tab2: ";
        foreach ($tab2 as $item) {
            echo "$item ";
        } echo "<br>";
        
        $tab3 = array_merge($tab1, $tab2);


        echo "Tab3 przed sort:ㅤ";
        foreach ($tab3 as $item) {
            echo "$item ";
        } echo "<br>";
        
        sort($tab3);


        echo "Tab3 po sort: ㅤㅤ";
        foreach ($tab3 as $item) {
            echo "$item ";
        } echo "<br>";
        
        
    }
    ?>
</section>
</body>
</html>