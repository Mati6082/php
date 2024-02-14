<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T16b</title>
</head>
<body>
<header>
    <h1>Zadanie T16b</h1>
    <h2>Autor: Mateusz Pakuła 3ip_2</h2>
</header>
<form action="" method="post">
    <button type="submit" name="self" value="self">Wczytaj dane do bazy danych</button>
</form>
<form action="zadanie.php" method="post">
    <button type="submit">Pokaż dane z tabeli</button>
</form>
<?php
if (isset($_POST['self'])) {
    $db = mysqli_connect('localhost', 'root', '', '3pir_2_pacjenci');
    mysqli_set_charset($db, 'utf8');

    $lines = file("dane.txt");

    $q = "";

    foreach ($lines as $line) {
        $data = explode(";", $line);
        $id = $data[0];
        $imie = $data[1];
        $nazwisko = $data[2];
        $email = $data[3];

        $q = "INSERT INTO tabela_1 (identyfikator, imie, nazwisko, email) VALUES
            ($id, '$imie', '$nazwisko', '$email')";

        mysqli_query($db, $q);

        echo "DODANO DANE";
    }
}
?>
</body>
</html>