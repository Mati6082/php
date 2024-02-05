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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$imie = $_SESSION['log'];
echo "<h1 id='welcome'>Witaj $imie</h1>";
?>
<section id="main">
    <p>Jesteś na stronie głównej.</p>
    <p>Przed opuszczeniem strony wyloguj się!</p>
    <a href="logout.php">Wyloguj</a>
</section>
</body>
</html>
