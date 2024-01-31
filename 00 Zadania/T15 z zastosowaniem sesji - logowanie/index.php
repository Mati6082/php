<?php
session_start();
if (!isset($_SESSION['log'])) {
    header('location: login.php');
    exit();
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>Strona główna</title>
    <meta charset="UTF-8">
</head>
<body>
<?php
$imie = ucfirst($_SESSION['log']);
echo "Witaj " . $imie;
?>
<p>Jesteś na stronie głównej.</p>
<p>Przed opuszczeniem strony wyloguj się!</p>
<a href="logout.php">Wyloguj</a>
</body>
</html>
