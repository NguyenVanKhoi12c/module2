<?php
include_once('Rectangles.php');

class Squares extends Rectangle
{
    public function __construct( $width)
    {
        parent::__construct( $width, $width);
    }
}