<?php
$sciezka = "narodoweCzytanie.txt";

$tekst = "W TYM ROKU NARODOWE CZYTANIE POD HONOROWYM PATRONATEM PARY PREZYDENCKIEJ ODBĘDZIE SIĘ 08.09.2018 R. W STULECIE ODZYSKANIA NIEPODLEGŁOŚCI WYBRANO POWIEŚĆ STEFANA ŻEROMSKIEGO „PRZEDWIOŚNIE”.\nWŁĄCZAJĄC SIĘ DO OGÓLNOPOLSKIEJ AKCJI, ZAPRASZAMY DO WSPÓLNEGO CZYTANIA W NASZEJ SZKOLE W PRZEDDZIEŃ TEGO WYDARZENIA 07.09.2018 R.\nNA DRUGIEJ GODZINIE LEKCYJNEJ W AULI SZKOLNEJ . CZYTAĆ BĘDĄ UCZNIOWIE KLASY 2M.\nFORMUŁA SPOTKANIA NIE JEST ZAMKNIĘTA – KAŻDY MOŻE PRZYŁĄCZYĆ SIĘ do CZYTANIA LUB SŁUCHANIA.";

$file = fopen($sciezka, "w");

fwrite($file, $tekst);

function zapiszIOdczytaj($sciezka) {
    echo nl2br(file_get_contents($sciezka));
}

zapiszIOdczytaj($sciezka);