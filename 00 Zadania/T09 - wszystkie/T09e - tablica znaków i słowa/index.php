<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T09e</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>
        Napisz program, w którym do jednowymiarowej tablicy znakowej wpisanych jest 10 znaków podanych przez
        użytkownika, a następnie:
    </p>
    <ul>
        <li>pyta użytkownika o długość losowego słowa oraz ilość słów,</li>
        <li>wyświetla wzorcową 10 znakową tablicę,</li>
        <li>wyświetla podaną ilość słów składających się z podanej ilości znaków wygenerowanych ze znaków zapisanych w
            10-elementowej tablicy stworzonej na początku programu.
        </li>
    </ul>
    <hr>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="wzorcowe">Podaj 10 znaków oddzielonych spacją (np. "a b c d e"), z których będą składać się losowe słowa: </label>
        <input type="text" id="wzorcowe" name="wzorcowe"><br>
        <label for="dlugosc">Podaj długość losowych słów: </label>
        <input type="number" id="dlugosc" name="dlugosc"><br>
        <label for="ilosc">Podaj ilość losowych słów: </label>
        <input type="number" id="ilosc" name="ilosc"><br>
        <button type="submit">Prześlij</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['wzorcowe'], $_POST['dlugosc'], $_POST['ilosc']) && is_numeric($_POST['dlugosc']) && is_numeric($_POST['ilosc'])) {
            $wzorcowe = $_POST['wzorcowe'];
            $znaki = explode(" ", $wzorcowe);
            $dlugosc = $_POST['dlugosc'];
            $ilosc = $_POST['ilosc'];

            for ($i = 0; $i < $ilosc; $i++) {
                $wygenerowaneSlowo = "";
                for ($j = 0; $j < $dlugosc; $j++) {
                    $maxIloscZnakow = sizeof($znaki) > 10 ? 9 : sizeof($znaki) - 1;
                    $wygenerowaneSlowo .= $znaki[rand(0, $maxIloscZnakow)];
                }
                $i1 = $i + 1;
                echo "<p>Słowo $i1: $wygenerowaneSlowo</p>";
            }
        }
    }
    ?>
</section>
</body>
</html>