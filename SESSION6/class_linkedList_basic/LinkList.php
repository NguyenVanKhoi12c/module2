<?php
include_once "Nodes.php";
class LinkList
{
    public $firstNode;
    public $lastNode;
    public $nodeCount;
    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->nodeCount = 0;
    }
    function addFirstNode($data)
    {
        $nodes = new Nodes($data);
        $nodes->link = $this->firstNode;
        $this->firstNode = $nodes;
        if (!$this->lastNode) {
            $this->lastNode = $nodes;
        }
        $this->nodeCount++;
    }
    function insertLast($data)
    {
        if ($this->firstNode) {
            $nodes = new Nodes($data);
            $this->lastNode->link = $nodes;
            $nodes->link = null;
            $this->lastNode = $nodes;
            $this->nodeCount++;
        } else {
            $this->addFirstNode($data);
        }
    }
    function totalNode()
    {
        return $this->nodeCount;
    }
    function readList()
    {
        $list = [];
        $current = $this->firstNode;
        while ($current) {
            array_push($list, $current->readNode());
            $current = $current->link;
        }
        return $list;
    }
}