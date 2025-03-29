<?php

/**
 * Divide and conquer
 */
function BinarySearch($sorted_array,$find)
{
    $left_pointer = 0;
    $right_pointer = count($sorted_array) - 1;

    while($left_pointer <= $right_pointer) 
    {
        $middle_pointer = floor(($left_pointer+$right_pointer) / 2);
        $value = $sorted_array[$middle_pointer];
        if($value == $find) { return $middle_pointer;}

        if($value < $find) {
            $left_pointer = $middle_pointer + 1;
        }
        if($value > $find) {
            $right_pointer = $middle_pointer - 1;
        }
    }

    return -1;
}

function dd($str)
{
    die(var_dump($str));
}
$search_array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
$index = BinarySearch($search_array,12);
dd($index);
