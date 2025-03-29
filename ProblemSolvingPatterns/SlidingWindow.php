<?php

/**
 * Big O(n^2)
 * store all answers in an array
 * afterwards sort the array then reverse it to get the biggest sum
 */
function maxSubArraySumNaive($arr)
{
    $left = 0;
    $max_numbers = $arr[1] - 1;
    $sums = [];
    $count = 1;
    for($left = 0; $left < count($arr); $left++) {
        $sum = 0;
        for($counter = 0; $counter <= $max_numbers; $counter++) {
            $position = $left + $counter;
            if($position >= count($arr)) {
                continue;
            }
            $sum += $arr[$position];
            $count++;
        }
        $count = 1;
        if($left + ($max_numbers+1) > count($arr)) {
            continue;
        }
        array_push($sums,$sum);
    }
    sort($sums);
    $sums = array_reverse($sums);

    return $sums[0];
}

function maxSubArraySum($arr,$num) {
    $maxSum = 0;
    $tempSum = 0;
    if(count($arr)<$num) return null;

    for($i=0;$i<$num;$i++) {
        $maxSum += $arr[$i];
    }

    $tempSum = $maxSum;

    for($i=$num;$i<count($arr);$i++) {
        $tempSum = $tempSum - $arr[$i-$num] + $arr[$i];
        $maxSum = max($maxSum,$tempSum);
    }

    return $maxSum;
}

function dd($str)
{
    die(var_dump($str));
}

$sum = maxSubArraySum([1,2,5,2,8,1,5,5],2);
dd($sum);