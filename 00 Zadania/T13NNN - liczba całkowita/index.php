<?php

class Liczba_Calkowita
{
    private $liczba;

    public
    function wyswietlLiczbe()
    {
        echo $this->liczba;
    }

    function pobierzLiczbe($liczba)
    {
        $this->liczba = $liczba;
    }

    function zwracajLiczbe()
    {
        return $this->liczba;
    }

    function wartosc_bezwzgledna()
    {
        return abs($this->liczba);
    }
}

$liczba = new Liczba_Calkowita();

$liczba->pobierzLiczbe(-14);
$liczba->wyswietlLiczbe();
echo "<br>";
echo $liczba->zwracajLiczbe();
echo "<br>";
echo $liczba->wartosc_bezwzgledna();
echo "<br>";

?>