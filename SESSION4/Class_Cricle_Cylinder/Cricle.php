<?php


class Cricle
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function calculatePerimeter()
    {
        return pi() * 2 * $this->radius;
    }
}