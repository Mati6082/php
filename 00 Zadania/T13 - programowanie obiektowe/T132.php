<?php

class Czolg
{
    public string $nazwa, $kolor;
    public int $iloscAmunicji;
    public bool $zaladowany = false;

    public function info()
    {
        return "Czołg " . $this->nazwa . " koloru " . $this->kolor . " ma " . $this->iloscAmunicji . " amunicji.";
    }

    public function pomaluj($kolor)
    {
        $this->kolor = $kolor;
        echo "Czołg został pomalwany na kolor " . $kolor;
    }

    public function zaladuj()
    {
        if ($this->iloscAmunicji > 0) {
            for ($i = 5; $i >= 0; $i -= 0.2) {
                echo "Przeładowuję, pozostało $i s<br>";
            }
            $this->zaladowany = true;
            echo "Gotowy do strzału!";
            $this->iloscAmunicji--;
        }
    }

    public function Czolg($nazwa, $kolor, $iloscAmunicji)
    {
        $this->nazwa = $nazwa;
        $this->kolor = $kolor;
        $this->iloscAmunicji = $iloscAmunicji;
    }
}

$czlog = new Czolg("T34-85", "zielony", 30);

$czlog->zaladuj();