<?php
class MyList
{
    public $myList;
    function MyList($myList = "")
    {
        if (is_array($myList)) {
            $this->myList = $myList;
        } else {
            $this->myList = array();
        }
    }
    function add($index, $element)
    {
        return $this->myList[$index] = $element;
    }
    function size()
    {
        return count($this->myList);
    }
    function remove($index)
    {
        if ($index < 0 && $index > $this->size()) {
            array_splice($this->myList, $index, 1);
        } else {
            die("Error: no index in array");
        }
    }
}