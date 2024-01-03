<?php

class Czolg
{
    public string $nazwa, $kolor;
    public int $iloscAmunicji;
    public bool $zaladowany = false;

    public function info()
    {
        return "Czołg " . $this->nazwa . " koloru " . $this->kolor . " ma " . $this->iloscAmunicji . " amunicji.<br>";
    }

    public function pomaluj($kolor)
    {
        $this->kolor = $kolor;
        echo "Czołg został pomalwany na kolor " . $kolor. "<br>";
    }

    public function zaladuj()
    {
        if ($this->iloscAmunicji > 0) {
            echo "Przeładowuję<br>";
            for ($i = 5; $i > 0; $i -= 1) {
                echo "pozostało $i s<br>";
            }
            $this->zaladowany = true;
            echo "Gotowy do strzału!<br>";
            $this->iloscAmunicji -= 1;
        }
    }

    public function strzelaj()
    {
        if ($this->zaladowany) {
            echo "BOOOM!!<br>";
            $this->zaladowany = false;
        } else {
            echo "Nie ma załadowanej amunicji do wystrzału<br>";
        }
    }

    public function __construct($nazwa, $kolor, $iloscAmunicji)
    {
        $this->nazwa = $nazwa;
        $this->kolor = $kolor;
        $this->iloscAmunicji = $iloscAmunicji;
    }
}

$czolg = new Czolg("T34-85", "zielony", 30);

echo $czolg->info();
$czolg->pomaluj("czarny");
echo $czolg->info();
$czolg->strzelaj();
$czolg->zaladuj();
$czolg->strzelaj();
$czolg->strzelaj();
$czolg->strzelaj();
$czolg->zaladuj();
$czolg->strzelaj();