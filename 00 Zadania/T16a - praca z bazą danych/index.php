<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>T16a = praca z bazą danych</title>
    <meta charset="UTF-8">
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <button value="true" name="create_table">Utwórz tabelę</button>
    <button value="true" name="load_data">Załaduj dane</button>
    <button value="true" name="display_data">Wyświetl dane</button>
</form>
<?php
$db = mysqli_connect('localhost', 'root', '', '3ip_2_baza_pracownikow');
mysqli_set_charset($db, "utf8");
echo $_POST['create_table'].$_POST['load_data'].$_POST['display_data']
?>
</body>
</html>
