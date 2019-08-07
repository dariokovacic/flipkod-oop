<?php

/**
 * Circle Class
 */
class Circle
{
    public $radius;
    public $pi;

    function __construct($radius)
    {
        $this->radius = $radius;
        $this->pi = number_format(pi(), 2);
        echo "Polumjer $this->radius<br>";
    }

    public function calc_circumference()
    {
        $circumference = 2*$this->pi*$this->radius;
        echo "Opseg kruga $circumference<br>";
    }

    public function calc_area()
    {
        $area = pow($this->radius, 2)*$this->pi;
        echo "Povrsina kruga $area<br>";
    }
}
