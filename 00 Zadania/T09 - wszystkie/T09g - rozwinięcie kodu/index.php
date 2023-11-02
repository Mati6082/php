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
    <h1>Zadanie T09f</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>
        Napisz program, który do dwuwymiarowej tablicy o wymiarach 7 × 7 wpisuje pseudolosowe liczby całkowite z zakresu
        <10,99> i wyświetla tę tablicę z zachowaniem wierszy i kolumn.<br>
        Liczby nie mogą się powtarzać.
    </p>
    <hr>
</header>
<section>
    <?php
    $players = [];
    $players[] = ["Nazwisko" => "Ronaldo", "Wiek" => 31, "Kraj" => "Portugalia","Drużyna" => "Real Madrid"];
    $players[] = ["Nazwisko" => "Messi", "Wiek" => 27, "Kraj" => "Argentyna", "Drużyna"=> "Barcelona"];
    $players[] = ["Nazwisko" => "Neymar", "Wiek" => 24, "Kraj" => "Brazylia", "Drużyna"=> "Barcelona"];
    $players[] = ["Nazwisko" => "Rooney", "Wiek" => 30, "Kraj" => "Anglia", "Drużyna"=> "Man United"];

    foreach ($players as $key => $tablice) {
        echo "<p>players[$key] => {";
        foreach ($tablice as $index => $value) {
            echo "$index => $value; ";
        }
        echo "}</p>";
    }
    ?>
</section>
</body>
</html>