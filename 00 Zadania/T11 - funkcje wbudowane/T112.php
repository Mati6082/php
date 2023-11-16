<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T112</title>
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
    <h2>T112</h2>
    <p>
        Dana jest tablica zawierająca imiona. Napisz funkcję, która wypisuje ilość imion żeńskich zapisanych w tablicy. Dla uproszczenia zakładamy, że imiona żeńskie to te, które kończą się na literę "a".
    </p>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <button type="submit">Wykonaj</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tab = array();

        $tab[] = "Marcin"; // 1
        $tab[] = "Martyna"; // 2
        $tab[] = "Malwina"; // 3
        $tab[] = "Kuba"; // 4
        $tab[] = "Piotr"; // 5
        $tab[] = "Kinga"; // 6
        $tab[] = "Dawid"; // 7
        $tab[] = "Jan"; // 8
        $tab[] = "Karolina"; // 9
        $tab[] = "Maja"; // 10


        function ileZenskich(&$tab) {
            $ile = 0;
            foreach ($tab as $item) {
                if ($item[strlen($item)-1] == 'a' && $item != "Kuba" && $item != "Barnaba") $ile++;
            }
            return $ile;
        }

        foreach ($tab as $item) {
            echo "$item ";
        }

        $ile = ileZenskich($tab);

        echo "<br>W tej tablicy jest $ile imon żeńskich.";
    }
    ?>
</section>
</body>
</html>