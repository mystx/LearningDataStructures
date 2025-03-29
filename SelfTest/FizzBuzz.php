<?php

/**
 * Given an integer n, return a string array answer (1-indexed) where:
 * answer[i] == "FizzBuzz" if i is divisible by 3 and 5.
 * answer[i] == "Fizz" if i is divisible by 3.
 * answer[i] == "Buzz" if i is divisible by 5.
 * answer[i] == i (as a string) if none of the above conditions are true.
 */

function FizzBuzz($arr) 
{
    $ans = [];
    foreach($arr as $num) 
    {
        if($num % 3 == 0 && $num % 5 == 0) {
            $ans[] = "FizzBuzz";
            continue;
        }
        if($num % 3 == 0 && $num % 5 != 0) {
            $ans[] = "Fizz";
            continue;
        }
        if($num % 5 == 0 && $num % 3 != 0) {
            $ans[] = "Buzz";
            continue;
        }
        $ans[] = $num;
    }

    return $ans;
}


$ans = FizzBuzz([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]);
print_r($ans);