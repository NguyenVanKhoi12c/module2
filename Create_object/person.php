<?php


class person
{
    protected $name;
    protected $phone;

    function setName($new_name)
    {
        $this->name = $new_name;
    }

    function getName(){
        return $this->name;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }
}
