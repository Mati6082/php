<?php

class Punkt
{
    private
    int $x,
        $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }
}

class Prostokat
{
    private
    Punkt
        $ld,
        $pd,
        $pg,
        $lg;

    public function __construct($ld, $pd, $pg, $lg)
    {
        $this->ld = $ld;
        $this->pd = $pd;
        $this->pg = $pg;
        $this->lg = $lg;
    }

    public function getLd(): Punkt
    {
        return $this->ld;
    }

    public function getPd(): Punkt
    {
        return $this->pd;
    }

    public function getPg(): Punkt
    {
        return $this->pg;
    }

    public function getLg(): Punkt
    {
        return $this->lg;
    }
}

$ld = new Punkt(3, 4);
$pd = new Punkt(6, 4);
$pg = new Punkt(6, 7);
$lg = new Punkt(3, 7);

$prostokat = new Prostokat($ld, $pd, $pg, $lg);

echo "ld => (" . $prostokat->getLd()->getX() . "," . $prostokat->getLd()->getY() . ")<br>";
echo "pd => (" . $prostokat->getPd()->getX() . "," . $prostokat->getPd()->getY() . ")<br>";
echo "pg => (" . $prostokat->getPg()->getX() . "," . $prostokat->getPg()->getY() . ")<br>";
echo "lg => (" . $prostokat->getLg()->getX() . "," . $prostokat->getLg()->getY() . ")<br>";

?>