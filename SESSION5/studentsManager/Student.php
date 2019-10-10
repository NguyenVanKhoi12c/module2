<?php

class Student extends User
{
    protected $class;

    public function __construct($name, $address, $phone, $class, $role)
    {
        parent::__construct($name, $address, $phone, $role);
        $this->class = $class;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function setClass($class)
    {
        $this->class = $class;
    }
}
