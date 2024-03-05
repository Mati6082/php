<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>T16a = praca z bazą danych</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="post">
    <button value="true" name="create_table">Utwórz tabelę</button>
    <button value="true" name="load_data">Załaduj dane</button>
    <button value="true" name="display_data">Wyświetl dane</button>
</form>
<section>
    <?php

    // PLIK PRACOWNICY.XSLX PRZEKONWERTOWAŁEM DO PLIKU .TXT ZAPISUJĄC PRACOWNICY.XSLX JAKO "PLIK CSV UTF-8" I ZMIENIAJĄC ROZSZERZENIE PLIKU .CSV NA .TXT

    $db = mysqli_connect('localhost', 'root', '', '3ip_2_baza_pracownikow');
    mysqli_set_charset($db, "utf8");

    if (isset($_POST['create_table'])) {
        $qTest = 'SELECT * FROM INFORMATION_SCHEMA.TABLES where TABLE_NAME = "pracownicy"';
        if (empty(mysqli_fetch_all(mysqli_query($db, $qTest)))) {
            
            $q = 'CREATE TABLE IF NOT EXISTS pracownicy (
    id int NOT NULL,
    nazwisko varchar(20),
    imie varchar(20),
    stanowisko varchar(20),
    dzial varchar(12),
    sekcja varchar(12),
    PRIMARY KEY(id, nazwisko, imie)
);'; // unikatowy klucz podstawowy składający się z połączonych id, nazwiska oraz imienia (niektóre id powtarzają się, dlatego nie można dodać UNIQUE i użyć go samego jako klucza podstawowego)

            mysqli_query($db, $q);
            
            echo "Utworzono tabelę pracownicy";
        } else {
            echo "Tabela już istnieje";
        }
    }

    elseif (isset($_POST['load_data'])) {
        $qTest = 'SELECT * FROM INFORMATION_SCHEMA.TABLES where TABLE_NAME = "pracownicy"';
        if (!empty(mysqli_fetch_all(mysqli_query($db, $qTest)))) {

            $lines = file("pracownicy.txt");

            foreach ($lines as $i1 => $line) {
                $line = ltrim($line, "\xEF\xBB\xBF");
                $data = explode(";", $line);

                $myPK = $data[0]."-".$data[1]."-".$data[2];

                $checkQuery = "SELECT COUNT(*) FROM pracownicy WHERE id = '".$data[0]."' AND nazwisko = '".$data[1]."' AND imie = '".$data[2]."'";
                $checkResult = mysqli_query($db, $checkQuery);
                $count = mysqli_fetch_row($checkResult)[0];

                if ($count == 0) {
                    $q = 'INSERT INTO pracownicy (id, nazwisko, imie, stanowisko, dzial, sekcja) VALUES (';
                    foreach ($data as $i2 => $field) {
                        $field = trim($field);
                        $q .= "'$field'";
                        if ($i2 !== array_key_last($data)) $q .= ", ";
                    }
                    $q .= ")";
                    mysqli_query($db, $q);
                } else {
                    echo "Rekord z kluczem podstawowym $myPK już istnieje.<br>";
                }
            }



            echo "Załadowano dane z pliku do bazy danych";
        } else {
            echo "Tabela nie istnieje";
        }
    }

    elseif (isset($_POST['display_data'])) {
        $qTest = 'SELECT * FROM INFORMATION_SCHEMA.TABLES where TABLE_NAME = "pracownicy"';

        if (!empty(mysqli_fetch_all(mysqli_query($db, $qTest)))) {
            $q = 'SELECT * FROM pracownicy';

            $output = mysqli_query($db, $q);

            $results = mysqli_fetch_all($output);
            $headers = mysqli_fetch_fields($output);

            echo "<table><thead>";

            foreach ($headers as $header)
                echo "<td>" . $header->name . "</td>";
            echo "<br>";

            echo "</thead>";

            foreach ($results as $result) {
                echo "<tr>";
                foreach ($result as $item) {
                    echo "<td>" . $item . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Tabela nie istnieje";
        }
    }
    
    else echo "Jaką operację chciał*byś przeprowadzić na bazie danych";

    mysqli_close($db)
    ?>
</section>
</body>
</html>
