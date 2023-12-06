<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T123</title>
    <style>
        body {
            box-sizing: border-box;
            margin: 0;
        }
        section {
            width: calc(50% - 10px - 10px);
            padding: 10px;
            float: left;
        }
        p {
            margin: 2px;
        }
    </style>
</head>
<body>
<section style="text-align: right">
    <?php
    $sciezka = "imiona.txt";
    $zawartosc = file($sciezka);
    
    foreach ($zawartosc as $item) {
        echo "<p>$item</p>";
    }
    ?>
</section>
<section style="text-align: left">
    <?php
    for ($i = sizeof($zawartosc)- 1; $i >= 0; $i--) {
        echo "<p>$zawartosc[$i]</p>";
    }
    ?>
</section>
</body>
</html>