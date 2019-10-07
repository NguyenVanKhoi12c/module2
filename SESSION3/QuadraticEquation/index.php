<?php

class  QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function getDiscriminant()
    {
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }

    function getRoot1()
    {
        return (-$this->b + sqrt(($this->b * $this->b) - (4 * $this->a * $this->c))) / (2 * $this->a);
    }

    function getRoot2()
    {
        return (-$this->b - sqrt(($this->b * $this->b) - (4 * $this->a * $this->c))) / (2 * $this->a);
    }
}



$quadratic = new QuadraticEquation(1,4,4);
if ($quadratic->getDiscriminant() >= 0) {
    echo "X1 = " . $quadratic->getRoot1() . "<br>" . "X2 = " . $quadratic->getRoot2();
} else {
    echo "vo nghiem";
}