<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie ZDP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Piekarnia Gaworzyce</h1>
</header>
<section>
    <h2 class="center-header">Sklep internetowy</h2>
    <section id="grid">
        <h3>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['wiek'] >= 18) {
                echo "Zamówiono ";
                $chleb = 0;
                $bulki = 0;
                $bagietki = 0;

                if (isset($_POST['chleb']) && is_numeric($_POST['chleb'])) $chleb = $_POST['chleb'];
                if (isset($_POST['bułki']) && is_numeric($_POST['bułki'])) $bulki = $_POST['bułki'];
                if (isset($_POST['bagietki']) && is_numeric($_POST['bagietki'])) $bagietki = $_POST['bagietki'];

                $darmowyChleb = floor($chleb / 3);
                echo "$chleb chleb";
                if ($chleb == 1) echo "";
                else if ($chleb > 0 && $chleb < 5) echo "y";
                else echo "ów";
                echo ", z czego $darmowyChleb jest gratis,";

                echo "$bulki buł";
                if ($bulki == 1) echo "kę";
                else if ($bulki > 0 && $bulki < 5) echo "ki";
                else echo "ek";
                echo " oraz ";

                echo "$bagietki bagiet";
                if ($bagietki == 1) echo "kę";
                else if ($bagietki > 0 && $bagietki < 5) echo "ki";
                else echo "ek";
                $cena = ($chleb - $darmowyChleb) * 4.99 + $bulki * 0.99 + $bagietki * 2.49;

                echo " za $cena";
                echo "zł.";
            } else {
                echo "Niewystarczający wiek do potwierdzenia zamówienia.";
            }
            ?>
        </h3>
    </section>
</section>
<footer>
    <div id="left-footer">
        <h3>Kontakt:</h3>
        <p>nr. telefonu: <span class="hover-underline">123 456 789</span></p>
        <p>e-mail: <span class="hover-underline">piekarnia@gaworzyce.pl</span></p>
    </div>
    <div id="right-footer">
        <p>Mateusz Pakuła &copy; 2023</p>
    </div>
</footer>
</body>
</html>