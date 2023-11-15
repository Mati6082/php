<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T10_3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>T10_3</h1>
    <h2>Autor: Mateusz Pakuła 3ip2</h2>
    <p>
        Dana jest tablica tab zawierająca liczby oraz liczba m o określonej wartości.<br>
        Napisz funkcję, która
    </p>
    <ul>
        <li>wyświetli tablicę w formie tabeli HTML,</li>
        <li>przemnoży wszystkie elementy tablicy tab przez czynnik m,</li>
        <li>zamieni wszystkie elementy w tablicy równe 0 na 1.</li>
    </ul>
    <p>
        Zademonstruj działanie funkcji w programie.
    </p>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="m">Podaj m: </label><input type="number" id="m" name="m">
        <button type="submit">Wykonaj</button>
    </form>
    <?php
    function wypiszTab(&$tab) {
        echo "<table><tr>";
        foreach ($tab as $index => $item) {
            echo "<td>$item</td>";
        }
    }
    
    function mainFun(&$tab, $m)
    {
        //WYPISANIE TABLICY W FORMIE TABELI
        wypiszTab($tab);
        echo "</tr></table>";
        //PRZEMNOZENIE ELEMENTOW PRZEZ CZYNNIK M
        foreach ($tab as $key => $item) {
            $tab[$key] = $m * $item;
            //ZAMIENIENIE ELEMENTOW ROWNYCH 0 NA 1
            if ($tab[$key] == 0) $tab[$key] = 1;
        }
        //WYPISANIE TABLICY W FORMIE TABELI PO PRZEMNOZENIU I ZAMIENIENIU ZER NA JEDYNKI
        wypiszTab($tab);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['m']) && is_numeric($_POST['m'])) {
            $m = $_POST['m'];
            
            //WYGENEROWANIE TABLICY Z 10 LOSOWYMI WARTOSCIAMI OD 1 DO 10
            $tab = array();
            for ($i = 0; $i < 10; $i++) {
                $tab[] = rand(0, 10);
            }
            
            mainFun($tab, $m);
        }
    }
    ?>
</section>
</body>
</html>