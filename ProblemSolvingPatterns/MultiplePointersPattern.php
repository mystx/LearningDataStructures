<?php

/**
 * Naive Solution O(n^2)
 */
function sumZeroNaive(array $arr) : array
{
    for ($i = 0; $i < count($arr); $i++) {
        $outerValue = $arr[$i];
        for($j = 0; $j < count($arr)+1; $j++) {
            $innerValue = $arr[$j];
            if($outerValue + $innerValue === 0) {
                return [$outerValue, $innerValue];
            }
        }
    }

    return [];
}

/**
 * Big O(n)
 * Good version
 */
function sumZero(array $arr)
{
    $left = 0;
    $right = count($arr) - 1;

    while($left < $right) {
        $sum = $arr[$left] + $arr[$right];

        if($sum === 0) {
            return [$arr[$left], $arr[$right]];
        } else if($sum > 0) {
            $right--;
        } else {
            $left++;
        }
    }
}

/**
 * Find how many times numbers in sorted array are repeated
 * tells you how many of each are in the array
 */
function MultiplePointersUnique($arr)
{
    $left = 0;
    $countArray = [];

    for($right = 0; $right < count($arr); $right++) {
        if($arr[$left] == $arr[$right]) {
            $countArray[$arr[$left]] = ($countArray[$arr[$left]] ?? 0) + 1;
        } else {
            $left++;
            $right--;
            continue;
        }
    }
}

/**
 * Find how many times numbers in sorted array are repeated
 * tells you how many of each are in the array
 */
function MultiplePointersUniqueCount($arr)
{
    $left = 0;
    $uniques = 0;

    for($right = 0; $right < count($arr); $right++) {
        if($arr[$left] != $arr[$right]) {
            $uniques++;
            $arr[$left] = $arr[$right]; 
        } 
    }

    return $uniques + 1;
}

function  dd($var) {
    var_dump($var);
    die();
}

//$res = sumZero([-4,-3,-2,-1,0,1,2,3,5]);
$v = MultiplePointersUniqueCount([1,1,1,2,3,4,5,5,6,6]);
dd($v);
