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
    <div id="koszyk"><img src="zamowienia.png" alt="koszyk"></div>
</header>
<section>
    <h2 class="center-header">Sklep internetowy</h2>
    <section id="grid">
        <div id="chleb">
            <p>chleb <span class="cena">4,99zł/szt</span></p>
            <h2>dodaj do koszyka</h2>
        </div>
        <div id="bułki">
            <p>bułki <span class="cena">0,99zł/szt</span></p>
            <h2>dodaj do koszyka</h2>
        </div>
        <div id="bagietki">
            <p>bagietki <span class="cena">2,49zł/szt</span></p>
            <h2>dodaj do koszyka</h2>
        </div>
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
<div id="zamowienie">
    <h1>zamówienie</h1>
    <form action="main.php" method="post">
        <input id="technicalZamowienie" type="text" value="zamowienie" name="zamowienie">
        <table>
            <tr>
                <th>nazwa</th>
                <th>cena</th>
                <th>ilość</th>
            </tr>
            <tr>
                <td>chleb</td>
                <td>4,99zł/szt</td>
                <td><input type="number" name="chleb" value="0" min="0"></td>
            </tr>
            <tr>
                <td>bułki</td>
                <td>0,99zł/szt</td>
                <td><input type="number" name="bułki" value="0" min="0"></td>
            </tr>
            <tr>
                <td>bagietki</td>
                <td>2,49zł/szt</td>
                <td><input type="number" name="bagietki" value="0" min="0"></td>
            </tr>
        </table>
        <div id="elementWiek">
            <label for="wiek">Podaj wiek: </label><input type="number" name="wiek" id="wiek" min="0" value="18">
        </div>
        <div id="buttons-in-form">
            <button type="submit">Zamów</button>
            <button type="button" id="zamknijZamowienie">Zamknij
            </button>
        </div>
    </form>
</div>
<script src="script.js"></script>
</body>
</html>