<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 8</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>Napisz program, który przelicza czas podany w sekundach na zapis uwzględniający godziny, minuty oraz sekundy. Program zadziała dla s większego od 0.<br>Przykład: dla s = 4000 wynikiem powinien być ciąg znaków : 1g6m40s</p>
    <hr>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="sek">podaj ilość sekund: </label>
        <input type="number" id="sek" name="sek">
        <button type="submit">Oblicz</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['sek']) && is_numeric($_POST['sek'])) {
            $sek = $_POST['sek'];
            $text = "";
            if ($sek>0) {
                if($sek / 3600 > 1) {
                    $ileGodz = floor($sek / 3600);
                    $sek -= $ileGodz *3600;
                    $text .= "$ileGodz";
                    $text .= "g";
                }
                if($sek / 60 > 1) {
                    $ileMin = floor($sek / 60);
                    $sek -= $ileMin *60;
                    $text .= "$ileMin";
                    $text .= "m";
                }
                $text .= "$sek";
                $text .= "s";
                echo "<h3>$text</h3>";
            }
        }
    }
    ?>
</section>
</body>
</html>