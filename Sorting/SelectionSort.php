<?php
//Swap:
function swap($arr,$index1,$index2)
{
    //stop unnecessary swapping
    if($index1 == $index2)
    {
        return $arr;
    }
    $v1 = $arr[$index1];
    $v2 = $arr[$index2];

    $arr[$index1] = $v2;
    $arr[$index2] = $v1;

    return $arr;
}

/**
 * O(n^2)
 */
function SelectionSort($arr)
{
    
    for($outer_index = 0; $outer_index < count($arr); $outer_index++) {
        $lowest = $outer_index;
        for($inner_index = $outer_index + 1; $inner_index < count($arr); $inner_index++)
        {
            //echo $outer_index." ".$inner_index;
            //echo PHP_EOL;
            if($arr[$inner_index] < $arr[$lowest])
            {
                $lowest = $inner_index;
            }
        }

        $arr = swap($arr,$outer_index,$lowest);
    }

    return $arr;
}

SelectionSort([34,22,10,19,17]);