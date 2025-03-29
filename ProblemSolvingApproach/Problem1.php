<?php
$time_start = microtime(true); 
/**
 * Problem:
 * Return the count of each character in a string
 * Input: "Hello"
 * Output: {"H": 1, "e": 1, "l": 2, "o": 1}
 */

function addCharToArray(array $arr, string $char) : array
{
    if(!isset($arr[$char])) {
        $arr[$char] = 1;
    } else {
        $arr[$char]++;
    }

    return $arr;
}

function charCount(string $string) : array
{
    //no special characters
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    //lowercase only
    $arr = str_split(strtolower($string));
    $result = [];
    //O(n) complexity
    foreach($arr as $char)
    {   
        $result = addCharToArray($result,$char);
    }

    return $result;
}

echo(json_encode(charCount("Hello!# ")));

$time_end = microtime(true);
$execution_time = ($time_end - $time_start)/60;
var_dump("Execution time: ".$execution_time);