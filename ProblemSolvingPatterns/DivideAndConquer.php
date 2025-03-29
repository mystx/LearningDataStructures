<?php

/**
 * O(n)
 */
function searchNaive($arr,$num) 
{
    for($i=0;$i<count($arr);$i++) {
       if($arr[$i] == $num) {
           return $i;
       } 
    }

    return -1;
}

function BinarySearch($arr,$num) 
{

}


function dd($str)
{
    die(var_dump($str));
}


searchNaive([1,2,3,4,5,6,7],2);