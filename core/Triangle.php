<?php

/**
 * Triangle Class
 */
class Triangle
{
    public $a;
    public $b;
    public $c;
    public $ha;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

        $s = $this->calc_circumference()*0.5;
        $this->ha = sqrt($s*($s-$a)*($s-$b)*($s-$c))/(0.5*$a);
        echo "a=$a, b=$b, c=$c, ha={$this->ha}<br>";
    }

    public function calc_circumference()
    {
        return $circumference = $this->a + $this->b + $this->c;
    }

    public function calc_area()
    {
        $area = 0.5*$this->a*$this->ha;
        echo "Povrsina trokuta $area<br>";
    }
}
