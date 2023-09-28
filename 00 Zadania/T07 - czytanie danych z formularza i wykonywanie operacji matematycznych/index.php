<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T07 - czytanie danych z formularza i wykonywanie operacji matematycznych</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 01</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <hr>
</header>
<section>
    <p>Program wczytuje imię i wyświetla powitanie z tym imieniem</p>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="imie">Podaj imię: </label>
        <input type="text" id="imie" name="imie">
        <label for="liczba1">Podaj liczbę 1: </label>
        <input type="text" id="liczba1" name="liczba1">
        <label for="liczba2">Podaj liczbę : </label>
        <input type="text" id="liczba2" name="liczba2">
        <label for="liczba3">Podaj liczbę 3: </label>
        <input type="text" id="liczba3" name="liczba3">
        <label for="liczba4">Podaj liczbę 4: </label>
        <input type="text" id="liczba4" name="liczba4">
        <input type="submit" value="Zatwierdź">
    </form>
</section>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imie = $_POST['imie'];
    echo "$imie witaj na mojej stronie!!!<br>";
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    $liczba3 = $_POST['liczba3'];
    $liczba4 = $_POST['liczba4'];

    $wszystkieLiczby = array();
    $suma = 0;
    $liczbaLiczb = 0;

    if (preg_match("/\d+/", $liczba1, $wyszukane)) {
        $liczbaLiczb++;
        $wszystkieLiczby[] = $wyszukane[0];
    }

    if (preg_match("/\d+/", $liczba2, $wyszukane)) {
        $liczbaLiczb++;
        $wszystkieLiczby[] = $wyszukane[0];
    }

    if (preg_match("/\d+/", $liczba3, $wyszukane)) {
        $liczbaLiczb++;
        $wszystkieLiczby[] = $wyszukane[0];
    }

    if (preg_match("/\d+/", $liczba4, $wyszukane)) {
        $liczbaLiczb++;
        $wszystkieLiczby[] = $wyszukane[0];
    }

    for ($i = 0; $i < sizeof($wszystkieLiczby); $i++) {
        $suma += $wszystkieLiczby[$i];
    }

    echo "Tablica wartości:<br>";
    var_dump($wszystkieLiczby);

    if ($liczbaLiczb > 0) {
        $srednia = $suma / $liczbaLiczb;
        echo "<br>Suma: $suma<br>";
        echo "Średnia: $srednia<br>";
    } else {
        echo "Nie podano żadnych poprawnych liczb.";
    }
}
?>

</body>
</html>