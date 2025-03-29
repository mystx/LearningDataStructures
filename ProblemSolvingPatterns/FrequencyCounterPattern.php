<?php
/**
 * Write function same()
 * which accepts 2 arrays.
 * the function should return true if every value in the array
 * has its corresponding value squared in the second array. freq of values must be the same
 */

 /**
  * This works but has bad time complexity
  * Big O(n^2)
 */
function same($arr1, $arr2) : bool
{
    if(count($arr1) != count($arr2))
        return false;

    //O(n^2)
    for($i = 0; $i<count($arr1); $i++) 
    {
        $correctIndex = array_search(pow($arr1[$i],2), $arr2);
        //yoda notation
        if(false === $correctIndex)
            return false;

        unset($arr2[$correctIndex]);
    }

    return true;
}

/**
 * samePattern()
 * This function takes two arrays as input and returns true if every value in the first array
 * has its corresponding value squared in the second array. The frequency of values must be the same.
 * @param array $arr1
 * @param array $arr2
 * @return bool
 */


 /**
  * How this works
  * Take each array - make another array with key of number value and value set to how many times it occurs
  * [1,2,2,3] => [1 => 1, 2 => 2, 3 => 1]
  * do that for both arrays
  * then compare the resultant arrays to see if the square root of each key is in the other array the correct amount of times.
  */
function samePattern($arr1, $arr2) {
    if (count($arr1) != count($arr2)) {
        return false;
    }

    $frequency_counter1 = [];
    $frequency_counter2 = [];

    foreach ($arr1 as $key) {
        $frequency_counter1[$key] = ($frequency_counter1[$key] ?? 0) + 1;
    }

    foreach ($arr2 as $key) {
        $frequency_counter2[$key] = ($frequency_counter2[$key] ?? 0) + 1;
    }

    foreach ($frequency_counter1 as $key => $count) {
        $square = $key ** 2;
        if (!isset($frequency_counter2[$square]) || $frequency_counter2[$square] !== $count) {
            return false;
        }
    }

    return true;
}

function validAnagram($string1,$string2) : bool
{
    if($string1===$string2) { return false; }
    if(strlen($string1) != strlen($string2))
        return false;

    $freq1 = [];
    $freq2 = [];

    foreach(str_split($string1) as $char) {
        $freq1[$char] = ($freq1[$char] ?? 0) + 1;
    }
    
    foreach(str_split($string2) as $char) 
        $freq2[$char] = ($freq2[$char] ?? 0) + 1;

    foreach($freq1 as $key => $val) {
        if(!isset($freq2[$key])) 
            return false;
        if($freq2[$key] != $val) 
            return false;
    }

    return true;
}

$anagram = validAnagram("anagram", "anagram");
var_dump($anagram);