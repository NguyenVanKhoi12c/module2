<?php


class StopWatch
{
    public $startTime;
    public $endTime;

    public function __construct($startTime, $endTime) // co tham so
    {
        $this->startTime = $startTime;
        $this->endTime = $endTime;
    }

    public function getStartTime()
    {

    }
}