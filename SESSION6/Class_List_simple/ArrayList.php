<?php

class ArrayList
{
    public $arrayList;

    public function ArrayList($arrayList = "")
    {
        if (is_array($arrayList)) {
            $this->arrayList = $arrayList;
        } else {
            $this->arrayList = [];
        }
    }

    function add($Obj)
    {
        array_push($this->arrayList, $Obj);
    }

    function get($index)
    {
        if ($this->inInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("Error: in arrayList.get");
        }
    }

    function inInteger($index)
    {
        preg_match("/^[0-9]+$/", $index);
    }

    function seze()
    {
        return count($this->arrayList);
    }

}