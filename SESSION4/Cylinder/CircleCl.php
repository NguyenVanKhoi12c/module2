<?php

class CircleCl
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getter_radius()
    {
        return $this->radius;
    }

    public function setter_radius($value_radius)
    {
        $this->radius = $value_radius;
    }

    public function getter_color()
    {
        return $this->radius;
    }

    public function setter_color($value_color)
    {
        $this->color = $value_color;
    }

    public function getter_Area()
    {
        return $this->radius * $this->radius * pi();
    }

    public function getter_Primeter()
    {
        return $this->radius * pi() * 2;
    }

    public function toString()
    {
        echo "Radius la :" . $this->radius . "<br>";
        echo "Color la :" . $this->color . "<br>";
        echo "Dien tich la :" . $this->getter_Area() . "<br>";
        echo "Chu vi la :" . $this->getter_Primeter();
    }
}


?>