<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T11a</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie T11a</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>
        Utwórz stronę, której tło będzie zielone w niedziele, natomiast w pozostałe dni tygodnia kolor będzie wybierany
        losowo.
    </p>
    <hr>
</header>
<section>
    <?php
    
    $day = getdate()["weekday"];
    $kolor = "rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")";
    
    if ($day == "Sunday") echo "<section id='green-sunday'>";
    else echo "<section id='colorful-day' style='background: $kolor'>";
    echo "$day</section>"
    
    ?>
</section>
</body>
</html>