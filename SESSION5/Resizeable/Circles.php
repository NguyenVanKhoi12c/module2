<?php
include_once "Resizeable .php";

class Circles implements Resizeable
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function get_Area()
    {
        return pi() * $this->radius * $this->radius;
    }


    public function resize($value)
    {
        $this->radius = $this->radius*$value;
    }
}