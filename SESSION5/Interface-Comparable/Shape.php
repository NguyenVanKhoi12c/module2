<?php


class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        return "toi la mot hinh dang.ten toi la $this->name";
    }
}