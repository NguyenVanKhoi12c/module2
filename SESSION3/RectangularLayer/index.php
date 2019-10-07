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

    public function getArea()
    {
        return $this->height * $this->width;
    }

    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function display()
    {
        return (($this->width + $this->height) * 2);
    }

    public function disphay()
    {
        echo "chu vi hinh chu nhat la" . $this->getPerimeter() . "<br" . "dien tich hinh chu nhat la " . $this->getArea();
    }
}

$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
$rectangle->disphay();
?>
