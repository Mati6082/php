<?php
session_start();
if (isset($_SESSION['log'])) {
    unset($_SESSION['log']);
}
$s = session_destroy();
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>Koniec sesji</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="flex">
    <div id="main">
        <p>Wylogowałeś się ze strony.</p>
        <a href="login.php">Logowanie</a>
    </div>
</div>
</body>
</html>
