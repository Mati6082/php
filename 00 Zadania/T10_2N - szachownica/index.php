<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T10_2N</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>T10_2N</h1>
    <h2>Autor: Mateusz Pakuła 3ip2</h2>
    <p>
        Napisz kod php z funkcją szachownica($a). Funkcja przyjmuje jeden parametr. który określa ilość kratek w wierszu i kolumnie.
    </p>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="a">Podaj a: </label><input type="number" id="a" name="a">
        <button type="submit">Wykonaj</button>
    </form>
    <?php
    function szachownica($a) {
        echo "<table>";
        for ($i = 0; $i < $a; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $a; $i++) {
                echo "<td class='niebieski'>a</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['a']) && is_numeric($_POST['a'])) {
            $a = $_POST['a'];

            szachownica($a);
        }
    }
    ?>
</section>
</body>
</html>