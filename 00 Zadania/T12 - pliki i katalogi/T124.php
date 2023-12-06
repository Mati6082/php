<?php
$sciezka = "napisy.txt";
$zawartosc = file($sciezka);

for ($i = 0; $i < sizeof($zawartosc)-1; $i++) {
    echo ($i + 1)." - ".$zawartosc[$i]." - ".bindec($zawartosc[$i])."<br>";
}
?>