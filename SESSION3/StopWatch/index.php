<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    function __construct($endTime, $startTime)
    {
        $this->startTime = $startTime;

        $this->endTime = $endTime;
    }

    function getter_startTime()
    {
        return $this->startTime;
    }

    function getter_endTime()
    {
        return $this->endTime;
    }

    function startTime()
    {
        $today = date("d/m/Y - H:i/:s");
        echo "Bay Gio La: " . $today;
    }
}

$startTime = date("h:i:sa");
$endTime = date("h:i:sp");
$stopwatch = new StopWatch($startTime, $endTime);
$stopwatch->startTime();
?>