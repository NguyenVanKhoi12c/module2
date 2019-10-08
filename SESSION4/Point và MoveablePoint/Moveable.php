<?php


class Moveable extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
        parent::__construct($x, $y);
    }

    public function get_xSpeed()
    {
        return $this->xSpeed;
    }

    public function set_xSpeed($valueXSpeed)
    {
        $this->xSpeed = $valueXSpeed;
    }

    public function get_ySpeed()
    {
        return $this->ySpeed;
    }
    public function set_ySpeed($valueXSpeed){
        $this->ySpeed = $valueXSpeed;
    }
    public function setSpeed(){
        return array($this->xSpeed,$this->ySpeed);
    }
    public function move(){
        echo $this->x += $this->xSpeed;
        echo $this->y += $this->ySpeed;
    }
    public function toString(){
        return $this->xSpeed.$this->ySpeed;
    }
}

{

}