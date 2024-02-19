<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T17</title>
    <style>
        body {
            margin: 0;
            background: #888888;
            color: #0c1009;
            text-align: center;
            font-family: Helvetica, sans-serif;
        }

        label {
            margin-right: .25em;
        }
    </style>
</head>
<body>
<header>
    <h1>T17 - zastosowanie biblioteki PDO</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
</header>
<form action="" method="post">
    <label for="imie">Podaj imie:</label><input type="text" name="imie" id="imie">
    <label for="nazwisko">Podaj imie:</label><input type="text" name="nazwisko" id="nazwisko">
    <button type="submit">Dodaj do tabeli</button>
</form>
<?php
$user = 'root';
$pass = '';
$dsn = 'mysql:host=localhost;dbname=3ip2_biblioteka';
if (isset($_POST['imie']) && isset($_POST['nazwisko'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    try {
        $pdo = new PDO($dsn, $user, $pass);
        echo "Połączenie nawiązane<br>";

        $q = "INSERT INTO autorzy (imie, nazwisko) VALUES 
                                         ('$imie', '$nazwisko')";

        $ile = $pdo->exec($q);

        if ($ile > 0) {
            echo "Dodano $ile wierszy";
        } else echo "Wystąpił błąd podczas dodawania wartości";

        $pdo = null;
    } catch (PDOException $e) {
        echo "Błąd połączenia: " . $e->getMessage();
        exit;
    }
}
?>
</body>
</html>