<?php

class osoba
{
    public $nazwisko, $imie, $wiek;

    public function wpiszNazwisko($arg1)
    {
        $this->nazwisko = $arg1;
    }

    public function pobierzNazwisko()
    {
        return $this->nazwisko;
    }

    public function wpiszImie($arg2)
    {
        $this->imie = $arg2;
    }

    public function pobierzImie()
    {
        return $this->imie;
    }

    public function wpiszWiek($arg3)
    {
        $this->wiek = $arg3;
    }

    public function pobierzWiek() {
        return $this->wiek;
    }

    public function wypiszDane() {
        return $this->pobierzImie()." ".$this->pobierzNazwisko()." lat ".$this->pobierzWiek();
    }
}

$czlowiek1 = new Osoba();

$czlowiek1->wpiszImie("Maciej");
$czlowiek1->wpiszNazwisko("Kot");
$czlowiek1->wpiszWiek("27");


echo $czlowiek1->wypiszDane();