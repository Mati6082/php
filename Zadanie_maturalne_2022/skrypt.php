<?php
$odpowiedzi = "wyniki4.txt";
$liczby = "przyklad.txt";


// 4_1
$plikOdp = fopen($odpowiedzi, "w");
$plikStareOdp = file($liczby);
$zawartosc = file($liczby);

$ile = 0;
$first = true;
$firstNum = "";

for ($i = 0; $i < sizeof($zawartosc) - 1; $i++) {
    if ($zawartosc[$i][0] == $zawartosc[$i][strlen($zawartosc[$i]) - 3]) {
        if ($first) {
            $firstNum = $zawartosc[$i];
            $first = false;
        }
        $ile++;
    }
}
fwrite($plikOdp, "Zadanie 4_1 " . ($ile) . " $firstNum");

// 4_2

function pierwsza($liczba)
{
    if ($liczba < 2) return false;
    $p = sqrt($liczba);
    for ($i = 2; $i <= $p; $i++) {
        if (($liczba % $i) == 0) return false;
    }
    return true;
}

$liczbaCzynnikow = 0;
$poprzedniaLiczbaCzynnikow = 0;
$liczbaZNajwiekszaLiczbaCzynnikow = 0;

foreach ($zawartosc as $item) {
    for ($i = 0; $i < $item; $i++) {
        if ($item % pierwsza($i) === 0) {
            $item /= pierwsza($i);
            $liczbaCzynnikow++;
        }
        if ($liczbaCzynnikow > $poprzedniaLiczbaCzynnikow) {
            $poprzedniaLiczbaCzynnikow = $liczbaCzynnikow;
            $liczbaZNajwiekszaLiczbaCzynnikow = $item;
        }
    }
}

echo $liczbaZNajwiekszaLiczbaCzynnikow;