<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Średnia arytmetyczna 4 liczb</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 02</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią arytmetyczną. WYnik
        wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="x1">Podaj a: </label>
        <input type="text" id="x1" name="x1">
        <label for="x2">Podaj b: </label>
        <input type="text" id="x2" name="x2">
        <label for="x3">Podaj c: </label>
        <input type="text" id="x3" name="x3">
        <label for="x4">Podaj d: </label>
        <input type="text" id="x4" name="x4">
        <input type="submit" value="Zatwierdź">
    </form>
</section>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $x1 = (double) $_POST['x1'];
    $x2 = (double) $_POST['x2'];
    $x3 = (double) $_POST['x3'];
    $x4 = (double) $_POST['x4'];
    $srednia = ($x1 + $x2 + $x3 + $x4) / 4;
    $srednia_zaokraglona = round($srednia);
    echo "a: $x1<br>b: $x2<br>c: $x3<br>d: $x4<br>Średnia: $srednia<br>Zaokrąglona średnia: $srednia_zaokraglona";
}
?>

</body>
</html>