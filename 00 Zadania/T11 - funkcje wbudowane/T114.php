<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie T114</title>
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
    <h2>T114</h2>
    <p>
        Napisz funkcję, która dla podanej daty w postaci mm, dd, YY sprawdzi, czy jest to prawidłowa data i jeśli tak
        sprawdzi, czy jest to data z przeszłości. Jeśli tak funkcja wypisze słowo „historia”, a jeśli nie wypisze
        „teraźniejszość lub przyszłość”. W przypadku błędnej danej funkcja kończy działanie i wyświetla komunikat o
        błędnej dacie.
    </p>
</header>
<section>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="data">Podaj date (mm.dd.YY): </label><input type="text" name="data" id="data">
        <button type="submit">Wykonaj</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['data'])) {
            $data = $_POST['data'];

            $mdy = explode(".", $data);

            if (checkdate($mdy[0], $mdy[1], $mdy[2])) {
                $y = $mdy[2];
                $m = $mdy[0];
                $d = $mdy[1];
                $nowsza = false;
                $dzisiaj = date("n.d.Y");
                $mdyN = explode(".", $dzisiaj);
                $yy = $mdyN[2];
                $mm = $mdyN[0];
                $dd = $mdyN[1];
                if ($y > $yy) $nowsza = true;
                elseif ($y == $yy) {
                    if ($m > $mm) $nowsza = true;
                    elseif ($m == $mm) {
                        if ($d > $dd) $nowsza = true;
                        elseif ($d == $dd) $nowsza = true;
                    }
                }

                if ($nowsza) echo "teraźniejszość lub przyszłość";
                else echo "historia";
            } else echo "błędna data";
        }
    }
    ?>
</section>
</body>
</html>