<?php


class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }


    public function getHeight()
    {
        return $this->height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function display()
    {
        return ("dien tich hinh chu nhat la :" . $this->getArea() . "<br>" . "chu vi hinh chu nhat la" . $this->getPerimeter());
    }

}