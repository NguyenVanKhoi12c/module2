<?php
include_once "Resizeable .php";
class Rectangles implements Resizeable {
    public $width;
    public $height;

    public function __construct($width,$height)
    {
        $this->width = $width;
        $this->height=$height;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }


    public function resize($value)
    {
        $this->width = $this->width * $value;
        $this->height = $this->height *  $value;

    }
}