<?php
/**
 * User: s.zheleznitskij
 * Date: 11/25/13
 * Time: 2:11 PM
*/



$unsorted = array(43,21,2,1,9,24,2,99,23,8,7,114,92,5);
//var_dump(count($unsorted));
function quick_sort($arrayTosort)
{
    if(count($arrayTosort) <= 1){
        return $arrayTosort;
    }
    else{
        $middlePoint = $arrayTosort[(int)(count($arrayTosort)/2)];

        $leftSide = array();
        $rightSide = array();
        for($i = 1; $i < count($arrayTosort); $i++)
        {
            if($arrayTosort[$i] < $middlePoint){
                $leftSide[] = $arrayTosort[$i];
            }
            else{
                $rightSide[] = $arrayTosort[$i];
            }
        }
        return array_merge(quick_sort($leftSide), array($middlePoint), quick_sort($rightSide));
    }
}

$result = quick_sort($unsorted);
//var_dump(count($unsorted));
var_dump($result);

