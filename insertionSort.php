<?php

$unsorted = array(8, 5, 2, 6, 9, 3, 1, 4, 7);

foreach($unsorted as $i => $value){
    $j = $i + 1;
    while (($j < count($unsorted) && ($unsorted[$j] < $unsorted[$i])))
    {
        $tmp = $unsorted[$i];
        $unsorted[$i] = $unsorted[$j];
        $unsorted[$j] = $tmp;

        if ($i > 0)
        {
            $i--;
        }
        $j--;
    }
}

print_r($unsorted);