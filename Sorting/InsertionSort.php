<?php

function dd($str)
{
    die(var_dump($str));
}

function insertionSort($arr)
{
    for($outerIndex = 1; $outerIndex < count($arr); $outerIndex++) {
        
        $currentVal = $arr[$outerIndex];

        for($innerIndex = $outerIndex - 1; (($innerIndex >= 0) && ($arr[$innerIndex] > $currentVal)); $innerIndex--) {

            $arr[$innerIndex+1] = $arr[$innerIndex];
            
        }

        $arr[$innerIndex+1] = $currentVal;

    }

    dd($arr);
}

insertionSort([2,1,9,76,4]);
