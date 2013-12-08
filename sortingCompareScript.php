<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Sergij
 * Date: 08.12.13
 * Time: 21:13
 * To change this template use File | Settings | File Templates.
 */

/*
 * Merge Algorithm
 */
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

/*
 * Merge sorting 100 elements
 */
$unsorted = array();
for ($i = 0; $i < 100; ++$i) {
    $unsorted[] = $i;
}
shuffle($unsorted);

$start = microtime(true);
divide($unsorted);
$timeMerge100 = microtime(true) - $start;

/*
 * Merge sorting 1000 elements
 */
$unsorted = array();
for ($i = 0; $i < 1000; ++$i) {
    $unsorted[] = $i;
}
shuffle($unsorted);

$start = microtime(true);
divide($unsorted);
$timeMerge1000 = microtime(true) - $start;

/*
 * Merge sorting 500 elements
 */
$unsorted = array();
for ($i = 0; $i < 500; ++$i) {
    $unsorted[] = $i;
}
shuffle($unsorted);

$start = microtime(true);
divide($unsorted);
$timeMerge500 = microtime(true) - $start;

/*
 * Merge sorting 500 elements
 */
$unsorted = array();
for ($i = 0; $i < 5000; ++$i) {
    $unsorted[] = $i;
}
shuffle($unsorted);

$start = microtime(true);
divide($unsorted);
$timeMerge5000 = microtime(true) - $start;

/*
 * Selection Algorithm
 */

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
/*
 * Selection sorting 100 elements
 */
$unsorted = array();
for ($i = 0; $i < 100; ++$i) {
    $unsorted[] = $i;
}
shuffle($unsorted);

$start = microtime(true);
selectionSort($unsorted);
$timeSelection100 = microtime(true) - $start;

/*
 * Selection sorting 500 elements
 */
$unsorted = array();
for ($i = 0; $i < 500; ++$i) {
    $unsorted[] = $i;
}
shuffle($unsorted);

$start = microtime(true);
selectionSort($unsorted);
$timeSelection500 = microtime(true) - $start;

/*
 * Selection sorting 500 elements
 */
$unsorted = array();
for ($i = 0; $i < 1000; ++$i) {
    $unsorted[] = $i;
}
shuffle($unsorted);

$start = microtime(true);
selectionSort($unsorted);
$timeSelection1000 = microtime(true) - $start;

/*
 * Selection sorting 500 elements
 */
$unsorted = array();
for ($i = 0; $i < 5000; ++$i) {
    $unsorted[] = $i;
}
shuffle($unsorted);

$start = microtime(true);
selectionSort($unsorted);
$timeSelection5000 = microtime(true) - $start;

/*
 * Insertion Algorithm
 */
function insertionSort($unsorted){
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
    return $unsorted;
}

/*
 * Insertion sorting 100 elements
 */
$unsorted = array();
for ($i = 0; $i < 100; ++$i) {
    $unsorted[] = $i;
}
shuffle($unsorted);

$start = microtime(true);
insertionSort($unsorted);
$timeInsertion100 = microtime(true) - $start;

/*
 * Insertion sorting 500 elements
 */
$unsorted = array();
for ($i = 0; $i < 500; ++$i) {
    $unsorted[] = $i;
}
shuffle($unsorted);

$start = microtime(true);
insertionSort($unsorted);
$timeInsertion500 = microtime(true) - $start;

/*
 * Insertion sorting 1000 elements
 */
$unsorted = array();
for ($i = 0; $i < 1000; ++$i) {
    $unsorted[] = $i;
}
shuffle($unsorted);

$start = microtime(true);
insertionSort($unsorted);
$timeInsertion1000 = microtime(true) - $start;

/*
 * Insertion sorting 5000 elements
 */
$unsorted = array();
for ($i = 0; $i < 5000; ++$i) {
    $unsorted[] = $i;
}
shuffle($unsorted);

$start = microtime(true);
insertionSort($unsorted);
$timeInsertion5000 = microtime(true) - $start;



