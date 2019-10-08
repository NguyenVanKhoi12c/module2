<?php


class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(){
        return $this->x;
    }
    public function setX($valueX){
        $this->x = $valueX;
    }
    public function getY(){
        return $this->y;
    }
    public function setY($valueY){
        $this->y = $valueY;
    }
    public function setXY($valueX,$valueY){
        $this->x = $valueX;
        $this->y = $valueY;
    }
    public function getXY(){
        return array($this->x,$this->y);
    }
    public function toString(){
        echo "diem thu nhat :$this->x" . "<br>";
        echo "diem thu hai :$this->y";
    }
}