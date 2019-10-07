<?php
$myArray = array(2,3,4,5,6,7);
class minNumber {
    function min($array){
        $min = $array[0];
        foreach($array as $value){
            if ($min > $value){
                $min = $value;
            }
        }
        echo $min;
    }
}
$checkMin = new minNumber();
$checkMin->min($myArray);
