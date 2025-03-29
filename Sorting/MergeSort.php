<?php

function merge($arr1,$arr2)
{
    $results = [];
    $left = 0;
    $right = 0;

    while($left < count($arr1) && $right < count($arr2)) {
        if($arr2[$right] > $arr1[$left]) {
            array_push($results,$arr1[$left]);
            $left++;
        } else {
            array_push($results,$arr2[$right]);
            $right++;
        }
    }

    //for the leftovers
    while($left < count($arr1)) {
        array_push($results,$arr1[$left]);
        $left++;
    }
    while($right < count($arr2)) {
        array_push($results,$arr2[$right]);
        $right++;
    }


    return $results;
}

function mergeSort($arr)
{
    if(count($arr) <= 1) return $arr;

    $halfway = floor(count($arr) / 2);
    $left = mergeSort(array_slice($arr,0,$halfway));
    $right = mergeSort(array_slice($arr,$halfway,count($arr)-1));

    return merge($left,$right);
}

$mergedSorted = mergeSort([55,123,2,66,77,12,2,3,6,8,62,72,32]);

var_dump($mergedSorted);
