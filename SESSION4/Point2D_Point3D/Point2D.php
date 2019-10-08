<?php


class Point2D
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function get_x()
    {
        return $this->x;
    }

    public function set_x($value_x)
    {
        $this->x = $value_x;
    }

    public function get_y()
    {
        return $this->y;
    }

    public function set_y($value_y)
    {
        $this->y = $value_y;
    }

    public function get_xy()
    {
        return array($this->x, $this->y);
    }

    public function set_xy($valueX, $valueY)
    {
        $this->x = $valueX;
        $this->y = $valueY;
    }

    public function toString()
    {
        echo "toa do x la :" . $this->x . "<br>";
        echo "toa do y la :" . $this->y;
    }
}