<?php

class Point3D extends Point2D
{
    private $z;

    public function __construct($x, $y, $z)
    {
        $this->z = $z;
    parent::__construct($x, $y);
}

    public function get_z()
    {
        return $this->z;
    }

    public function set_z($value_z)
    {
        $this->z = $value_z;
    }

    public function set_xyz($valueX, $valueY, $valueZ)
    {
        parent::set_xy($valueX, $valueY);
        $this->z = $valueZ;
    }

    public function get_xyz()
    {
        return array($this->x,$this->y,$this->z);
    }

    public function toString()
    {
        echo "toa do x la : " . $this->x . "<br>";
        echo "toa do y la : " . $this->y . "<br>";
        echo "toa do z : " . $this->z;
    }

}