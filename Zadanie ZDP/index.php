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
    <div id="koszyk">koszyk</div>
</header>
<section>
    <h2 class="center-header">Sklep internetowy</h2>
    <form action="main.php" method="post">
        // TODO div na button submit and style
        <section id="grid">
            <div id="chleb">
                <p>chleb <span class="cena">4.99/szt</span></p>
                <h2>dodaj do koszyka</h2>
            </div>
            <div id="bułki">
                <p>bułki <span class="cena">0.99/szt</span></p>
                <h2>dodaj do koszyka</h2>
            </div>
            <div id="bagietki">
                <p>bagietki <span class="cena">2.49/szt</span></p>
                <h2>dodaj do koszyka</h2>
            </div>
        </section>
    </form>
</section>
<footer>
    <div id="left-footer">
        <h3>Kontakt:</h3>
        <p>nr. telefonu: <span class="hover-underline">123 456 789</span></p>
        <p>e-mail: <span class="hover-underline">piekarnia@gaworzyce.pl</span></p>
    </div>
    <div id="right-footer"><p>Mateusz Pakuła &copy; 2023</p></div>
</footer>
</body>
</html>