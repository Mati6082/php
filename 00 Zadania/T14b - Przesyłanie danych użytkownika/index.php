<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T14b - Przesyłanie danych użytkownika</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <table id="author">
        <tr>
            <td colspan="3">Autor</td>
        </tr>
        <tr>
            <td>Imię</td>
            <td>Nazwisko</td>
            <td>Klasa</td>
        </tr>
        <tr>
            <td>Mateusz</td>
            <td>Pakuła</td>
            <td>3ip_02</td>
        </tr>
    </table>
    <div id="order">
        <h1 id="task">Zadanie T14b - Przesyłanie danych użytkownika</h1>
        <p>Utwórz skrypt, który dane użytkownika przesyłane za pomocą formularza będzie przekazywał do utworzonego pliku
            cookie. Formularz powinien zawierać imię i nazwisko użytkownika.</p>
    </div>
</header>


<section id="main">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="imie">Podaj imię:</label><input type="text" id="imie" name="imie">
        <label for="nazwisko">Podaj nazwisko:</label><input type="text" id="nazwisko" name="nazwisko">
        <button type="submit">Prześlij dane</button>
    </form>
    <?php
    $cookieKey = "usersData";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];

        $value = $imie . " " . $nazwisko;

        $expires = time() + 30 * 24 * 60 * 60; // obecny czas + 30 dni

        setcookie($cookieKey, $value, $expires);
    }

    function getCookie(): void
    {
        global $cookieKey;
        if (isset($_COOKIE[$cookieKey])) {
            $cookie = explode(" ", $_COOKIE[$cookieKey]);

            $imie = ($cookie[0] != "") ? $cookie[0] : "Nie podano";
            $nazwisko = ($cookie[1] != "") ? $cookie[1] : "Nie podano";

            echo "Dane użytkownika: (Aby po zmianie zobaczyć wprowadzone dane przeładuj stronę)<br>";

            echo "Imię: $imie<br>";
            echo "Nazwisko: $nazwisko<br>";
        } else {
            echo "Brak danych użytkownika :/ (Aby po zmianie zobaczyć wprowadzone dane przeładuj stronę)<br>";
        }
    }

    ?>
    
    <p id="wynik">
        <?php getCookie(); ?>
    </p>
</section>

<footer>
    <p>Mateusz Pakuła &copy; 2023</p>
</footer>
</body>
</html>