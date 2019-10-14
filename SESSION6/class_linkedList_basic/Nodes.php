<?php
class Nodes
{
    public $data;
    public $link;
    public function __construct($data)
    {
        $this->data = $data;
        $this->link = Null;
    }
    public function readNode()
    {
        return $this->data;
    }
}