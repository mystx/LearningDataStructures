<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $merged = [];
        $merged = $this->generateArr($nums1,$m,$merged);
        $merged = $this->generateArr($nums2,$n,$merged);
        $nums1 = $merged;
        sort($nums1);
        return $nums1;
    }

    function generateArr($arr,$m,$pushArr)
    {
        for($innerCount = 0; $innerCount <= count($arr); $innerCount++)
        {
            if($innerCount < $m) {
                array_push($pushArr,$arr[$innerCount]);
            }
        }
        return $pushArr;
    }
}

$sol = new Solution();
$arr1 = [1,2,3,0,0,0];
$val = $sol->merge($arr1,3,[2,5,6],3);
var_dump($val);