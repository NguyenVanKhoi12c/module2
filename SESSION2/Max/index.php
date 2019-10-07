<?php

$myArray = array(array(1, 9, 3), array(0, 3, 5));
$max = $myArray[0][0];
for ($i = 0; $i < count($myArray); $i++) {
    for ($j = 0; $j < count($myArray[$i]); $j++) {
        if ($max < $myArray[$i][$j]) {
            $max = $myArray[$i][$j];
        }
    }
}
echo $max;
