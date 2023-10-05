<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 9</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>Napisz program, który zamienia długość podaną w calach na mm.<br>(1cal=25,3995 mm)</p>
    <hr>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="cal">Długość w calach: </label>
        <input type="number" id="cal" name="cal">
        <button type="submit">Oblicz</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['cal']) && is_numeric($_POST['cal'])) {
            $cal = $_POST['cal'];

            $mm = $cal * 25.3995;
            echo "<h3>$cal cali to $mm mm.</h3>";
        }
    }
    ?>
</section>
</body>
</html>