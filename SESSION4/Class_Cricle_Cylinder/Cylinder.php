<?php


class Cylinder extends Cricle
{
    private $height;

    public function __construct($radius,$height)
    {
        $this->height = $radius;
        parent::__construct($radius,$height);
    }
    public function calculateArea()
    {
        return parent::calculateArea() * $this->height;
    }
    public function calculatePerimeter()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }
}