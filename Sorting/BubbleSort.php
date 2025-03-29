<?php

//Swap:
function swap($arr,$index1,$index2)
{
    $v1 = $arr[$index1];
    $v2 = $arr[$index2];

    $arr[$index1] = $v2;
    $arr[$index2] = $v1;

    return $arr;
}

/**
 * Time complexity : n^2
 */
function BubbleSort($arr)
{

    for($i=count($arr);$i > 0; $i--) {
        $did_swap = false;
        for($j=0;$j<$i-1;$j++) {
            if($arr[$j] > $arr[$j+1]) {
                $arr = swap($arr,$j,$j+1);
                $did_swap = true;
            }
        }

        if(!$did_swap)
        {
            break;
        }
    }

    return $arr;
}

$val = BubbleSort([22,5,1,7,9,3,4,10]);
var_dump($val);