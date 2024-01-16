<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T13N - prace rolnicze</title>
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
        <h1 id="task">Zadanie T13N - prace rolnicze</h1>
        <p>Utwórz stronę, która spełnia następujące warunki:</p>
        <ul>
            <li>Posiada formularz, w którym wpisujemy jedno z następujących narzędzi: pług, brona, opryskiwacz lub
                przyczepa oraz submit z napisem "Pokaż pracę wykonywaną danym narzędziem",
            </li>
            <li>Jeżeli wpiszemy poprawnie jedno z narzędzi, zostaje wyświetlony jeden z napisów: "pług — orka", "brona —
                bronowanie", "opryskiwacz — oprysk" lub "przyczepa — transport",
            </li>
            <li>Jeżeli błędnie podamy nazwę narzędzia, to jest wyświetlany napis "Podaj inne narzędzie",</li>
            <li>Skrypt PHP tworzy klasę Prace_rolnicze, wyświetlenie napisu jest metodą tej klasy.</li>
        </ul>
    </div>
</header>

<section id="main">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="narzedzie" id="narzedzie" placeholder="Podaj narzędzie rolnicze:"
               value="<?php if (isset($_POST['narzedzie'])) echo $_POST['narzedzie'] ?>">
        <button type="submit">Pokaż pracę wykonywaną danym narzędziem</button>
    </form>
    <?php

    class Prace_rolnicze
    {
        public $dane, $odpowiedz;

        public function generujOdpowiedz(): void
        {
            $this->odpowiedz = match ($this->dane) {
                "pług" => $this->dane . " - orka",
                "brona" => $this->dane . " - bronowanie",
                "opryskiwacz" => $this->dane . " - oprysk",
                "przyczepa" => $this->dane . " - transport",
                default => "Podaj inne narzędzie"
            };
        }

        public function wypiszOdpowiedz()
        {
            $this->generujOdpowiedz();
            return $this->odpowiedz;
        }

        public function __construct($dane)
        {
            $this->dane = $dane;
        }
    }

    ?>
    <p id="wynik">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['narzedzie'])) {
            $praceRolnicze = new Prace_rolnicze($_POST['narzedzie']);

            echo $praceRolnicze->wypiszOdpowiedz();
        }
        ?>
    </p>
</section>

<footer>
    <p>Mateusz Pakuła &copy; 2023</p>
</footer>
</body>
</html>