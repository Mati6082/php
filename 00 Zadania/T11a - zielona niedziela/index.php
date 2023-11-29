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
    <p>Utwórz stronę, której tło będzie zielone w niedziele, natomiast w pozostałe dni tygodnia kolor będzie wybierany
        losowo</p>
</header>
    <?php
    $data = getdate();
    $dzien = $data["wday"];
    
    $dzienS = match ($dzien) {
      1 => "Poniedziałek",  
      2 => "Wtorek",  
      3 => "Środa",  
      4 => "Czwartek",  
      5 => "Piątek",  
      6 => "Sobota",  
      7 => "Niedziela",  
    };

    $losowyKolor = "";
    for ($i = 0; $i < 6; $i++) {
        $losowyKolor.rand();
    }

    if ($dzien == 7) {
        echo "<section style='background: green'>";
    } else echo "<section style='background: #'>";
    echo "<h1>$dzienS</h1></section>"
    ?>
</body>
</html>