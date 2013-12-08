<?php

$unsorted =  array(8, 5, 2, 6, 9, 3, 1, 4, 7);

function divide($unsorted)
{
    if(count($unsorted) != 1){

        $middleElement = round(count($unsorted)/2);
        $counter = 0;
        foreach($unsorted as $unsortedElement){
            if($counter < $middleElement){
                $leftSide[]= $unsortedElement;
            }else{
                $rightSide[]= $unsortedElement;
            }
            $counter++;
        }
    }else{
        return $unsorted;
    }
    $leftSide = divide($leftSide);
    $rightSide = divide($rightSide);

    return contact($leftSide, $rightSide);
}

function contact(array $leftSide, array $rightSide) {
    $result = array();
    while (count($leftSide) > 0 || count($rightSide) > 0) {
        if (count($leftSide) > 0 && count($rightSide) > 0) {
            $firstLeft = current($leftSide);
            $firstRight = current($rightSide);
            if ($firstLeft <= $firstRight) {
                $result[] = array_shift($leftSide);
            } else {
                $result[] = array_shift($rightSide);
            }
        } else if (count($leftSide) > 0) {
            $result[] = array_shift($leftSide);
        } else if (count($rightSide) > 0) {
            $result[] = array_shift($rightSide);
        }
    }
    return $result;
}




var_dump(divide($unsorted));