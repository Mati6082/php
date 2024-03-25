<?php

class Punkt
{
    public
        $x,
        $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

class Prostokat
{
    public
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
}

$ld = new Punkt(3, 4);
$pd = new Punkt(6, 4);
$pg = new Punkt(6, 7);
$lg = new Punkt(3, 7);

$prostokat = new Prostokat($ld, $pd, $pg, $lg);

echo "ld => (" . $prostokat->ld->x . "," . $prostokat->ld->y . ")<br>";
echo "pd => (" . $prostokat->pd->x . "," . $prostokat->pd->y . ")<br>";
echo "pg => (" . $prostokat->pg->x . "," . $prostokat->pg->y . ")<br>";
echo "lg => (" . $prostokat->lg->x . "," . $prostokat->lg->y . ")<br>";

?>