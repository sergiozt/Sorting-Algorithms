<?php
$unsorted = array(8, 5, 2, 6, 9, 3, 1, 4, 7);
function selectionSort(array $array)
{
    for ($i = 0; $i < count($array); $i++) {
        $min = $i;
        $length = count($array);
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        $tmp = $array[$min];
        $array[$min] = $array[$i];
        $array[$i] = $tmp;
    }
    return $array;
}
var_dump(selectionSort($unsorted));