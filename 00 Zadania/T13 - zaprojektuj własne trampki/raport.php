<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T13 - zaprojektuj własne trampki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zaprojektuj własne trampki</h1>
    <h2>Autor: Mateusz Pakuła 3ip02</h2>
    <p>
        Zapoznaj się z rozdziałem podręcznika. Opracuj własny formularz i skrypt pobierający dane. Do wykonania zadania
        użyj różne komponenty formularzy. Przykładowy wygląd formularza pokazany jest na załączonej grafice.
    </p>
</header>

<section id="raport">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imie_naz = "";
        $email = "";
        $tel = "";
        $opis = "";
        $kolor = "";
        $rozmiar = "";
        $opcje = array();
        if (isset($_POST["imie_naz"]))
            $imie_naz = $_POST["imie_naz"];
        if (isset($_POST["email"]))
            $email = $_POST["email"];
        if (isset($_POST["tel"]))
            $tel = $_POST["tel"];
        if (isset($_POST["opis"]))
            $opis = $_POST["opis"];
        if (isset($_POST["kolor"]))
            $kolor = $_POST["kolor"];
        if (isset($_POST["rozmiar"]))
            $rozmiar = $_POST["rozmiar"];
        if (isset($_POST["sznurowki"]))
            $opcje["Sznurowki"] = $_POST["sznurowki"];
        if (isset($_POST["logo"]))
            $opcje["Logo"] = $_POST["logo"];
        if (isset($_POST["podeszwy"]))
            $opcje["Podeszwy"] = $_POST["podeszwy"];
        if (isset($_POST["mp3"]))
            $opcje["MP3"] = $_POST["mp3"];

        //validate values
        if ($email == "") $email = "niepoprawny email";
        $email = ($email == filter_var($email, FILTER_VALIDATE_EMAIL)) ? $email : "niepoprawny email";
        $tel = ($tel == "") ? "nie podano numeru" : $tel;
        $imie_naz = ($imie_naz == "") ? "nie podano imienia i nazwiska" : $imie_naz;
        $kolor = ($kolor == "") ? "nie podano koloru" : $kolor;
        $rozmiar = ($rozmiar == "") ? "nie podano rozmiaru" : $rozmiar;

        echo "<h2 id='zgloszenie-header'>Zgłoszenie użytkownika $imie_naz</h2>";
        echo "<p>Imię i nazwisko: $imie_naz</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Numer telefonu: $tel</p>";
        if ($opis != "")
            echo "<fieldset id='raport-opis'><legend>Opis</legend>$opis</fieldset>";
        echo "<fieldset id='konfiguracja'><legend>Konfiguracja</legend>";
        echo "<p>Kolor: $kolor</p>";
        echo "<p>Rozmiar: $rozmiar</p>";
        foreach ($opcje as $key => $item) {
            echo "<p>$key: $item</p>";
        }
        echo "</fieldset>";
    }
    ?>
    <button onclick='goback()'>Popraw formularz</button>
</section>

<footer>
    <p>Mateusz Pakuła &copy; 2023</p>
</footer>
<script>
    function goback() {
        window.history.back()
    }
</script>
</body>
</html>