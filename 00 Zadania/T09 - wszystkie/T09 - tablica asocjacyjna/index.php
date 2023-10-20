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
    <h1>Zadanie T09</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>Napisz skrypt, w którym zdefiniuj tablicę asocjacyjną - 5-elementową. W tablicy indeksami są nazwy państw, a wartościami ich stolice.</p>
    <hr>
</header>
<section>
    <?php
    $tablica = array(
        "Polska" => "Warszawa",
        "Niemcy" => "Berlin",
        "Czechy" => "Praga",
        "Słowacja" => "Bratysława"
    );

    var_dump($tablica);
    ?>
</section>
</body>
</html>