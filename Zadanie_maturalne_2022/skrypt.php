<?php
$odpowiedzi = "wyniki4.txt";
$liczby = "przyklad.txt";

$plikOdp = fopen($odpowiedzi, "w");
$plikStareOdp = file($liczby);
$zawartosc = file($liczby);

$ile = 0;

for ($i = 0; $i < sizeof($zawartosc) - 1; $i++) {
    if ($zawartosc[$i][0] == $zawartosc[$i][strlen($zawartosc[$i])-3]) {
        fwrite($plikOdp, "Zadanie 4_1 ".($i+1)." $zawartosc[$i]");
        break;
    }
}
