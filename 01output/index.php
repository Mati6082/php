<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>output</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
    <h1>Nowe znaczniki</h1>
</header>
<section id="main">
    <section>
        <?php
        echo "Hello<br>";
        echo 123;
        echo "<h1>Hello</h1>";
        ?>
    </section>
    <section>
        <?php
        print "Hello";
        ?>
    </section>
    <section>
        <?php
        print_r("Hello");
        print_r([1, 2, 3]);
        echo "<br>";
        var_dump("Hello");
        ?>
    </section>
    <section>
        <?php
        echo "<br>Tytuł książki \"Pan Tadeusz\"<br>";
        ?>
    </section>
    <section>
        <?php
        $haslo = "toster elektryczny";

        echo 'Tutaj pojawi się łańcuch znaków: $haslo<br>';
        echo "tutaj pojawi się wartość zmiennej: $haslo";
        ?>
    </section>
</section>
</body>
</html>