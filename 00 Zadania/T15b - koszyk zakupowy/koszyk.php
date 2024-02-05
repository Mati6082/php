<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>Koszyk</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<p><b>Zawartość koszyka</b></p>
<?php
if (isset($_SESSION['koszyk'])) {
    foreach (unserialize($_SESSION['koszyk']) as $produkt) {
        echo "<li>" . $produkt . "</li>";
    }
} else {
    echo "brak sesji";
}
?>
<p><a href="lista.php">Przejdź do listy produktów</a></p>
</body>
</html>
