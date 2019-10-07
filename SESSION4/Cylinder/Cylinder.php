<?php
include_once "CircleCl.php";
class Cylinder extends CircleCl
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        $this->height = $height;
        parent::__construct($radius, $color);
    }

    public function getter_height()
    {
        return $this->height;
    }

    public function setter_height($value_height)
    {
        $this->height = $value_height;
    }

    public function getter_Area()
    {
        return 2 * pi() * $this->radius * $this->height;
    }

    public function getter_Volume()
    {
        return pi() * $this->radius * $this->height;
    }

    public function toString(){
        parent::toString();
        echo "<br>";
        echo "The tich la : " . $this->getter_Volume();
    }
}