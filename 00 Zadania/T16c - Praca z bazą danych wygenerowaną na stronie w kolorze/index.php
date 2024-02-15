<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T16c</title>
    <style>
        body {
            margin: 0;
            font-family: Helvetica, sans-serif;
            background: bisque;
            color: #0c1009;
        }
        p {
            margin: 5px 20%;
            padding: 1em;
            border: 3px solid #0c1009;
            text-align: center;
        }
        header {
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1>T16c</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
</header>

<?php
$db = mysqli_connect('localhost','root','','3pir_2_pracownicy_w_kolorze');
mysqli_set_charset($db, "utf8");

$q = "SELECT * FROM pracownicy";

$wynik = mysqli_query($db, $q);

foreach ($wynik as $line) {
    $color = end($line);
    echo "<p style='background: ".$color."'>";
    foreach ($line as $item) {
        echo "$item ";
    } echo "</p>";
}
?>
</body>
</html>