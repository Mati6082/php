<?php
session_start();
if (isset($_SESSION['log'])) {
    header('location: lista.php');
    exit();
} elseif (isset($_POST['nazwa']) && isset($_POST['haslo'])) {
    if ($_POST['nazwa'] == 'janek' && $_POST['haslo'] == 'jan123') {
        $_SESSION['log'] = $_POST['nazwa'];
        header('location: lista.php');
        exit();
    } else {
        echo "Nieprawidłowe dane logowania<br>";
    }
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>Autoryzacja danych</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="flex">
    <div id="login-box">
        <form action="login.php" method="post"><p id="log">Logowanie</p>
            <p class="fo">Nazwa użytkownika:</p>
            <input type="text" name="nazwa" value="" size="25"><br>
            <p class="fo">Hasło:</p>
            <input type="password" name="haslo" value="" size="25">
            <button type="submit">Zaloguj się</button>
        </form>
    </div>
</div>
</body>
</html>