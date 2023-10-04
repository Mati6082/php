<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 6</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
    <p>Napisz program, który oblicza pole trójkąta na podstawie długości jego boków za pomocą wzoru Herona.</p>
    <hr>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="a">podaj a: </label>
        <input type="number" id="a" name="a">
        <label for="b">podaj b: </label>
        <input type="number" id="b" name="b">
        <label for="c">podaj b: </label>
        <input type="number" id="c" name="c">
        <button type="submit">Oblicz</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['a'], $_POST['b'], $_POST['c']) && is_numeric($_POST['a']) && is_numeric($_POST['b']) && is_numeric($_POST['c'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            $pom  = array($a, $b, $c);

            if ($pom[0] + $pom[1] > $pom[2]) {
                echo "<h4>Pole trójkąta o bokach:<br>a: $a<br>b: $b<br>c: $c<br></h4>";
                $p = ($a + $b + $c) / 2;
                $pole = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
                echo "<h4>wynosi: $pole</h4>";
            } else echo "<h4>Taki trójkąt nie może powstać!</h4>";
        }
    }
    ?>
</section>
</body>
</html>