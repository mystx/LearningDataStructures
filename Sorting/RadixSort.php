<?php
/**
 * Helperrs:
 */
Class RadixHelpers
{
    static function getDigit($number,$position) : int
    {
        return floor(abs($number) / pow(10,$position)) %10;
    }

    static function getDigitEasyWay($number,$position) : int
    {
        $position = strlen($number) - 1;
        return (int)(substr($number,$position,1));
    }

    static function digitCount($number)
    {
        if($number==0) return 1;
        return floor(log10(abs($number))) + 1;
    }

    static function digitCountEasyWay($number)
    {
        return strlen($number);
    }

    static function mostDigits($array)
    {
        $store = [];
        foreach($array as $number)
        {
            array_push($store,self::class::digitCount($number));
        }

        return max($store);
    }

    static function createEmptyBucket($size)
    {
        return array_fill(0, $size, []);
    }
}



function radixSort($nums)
{
    $maxDigitCount = RadixHelpers::mostDigits($nums);
    for($outer = 0;$outer<$maxDigitCount;$outer++) {
        $buckets = RadixHelpers::createEmptyBucket(10);
        
        for($inner = 0; $inner < count($nums); $inner++) {
            $bucket_number = RadixHelpers::getDigit($nums[$inner],$outer);
            array_push($buckets[$bucket_number], $nums[$inner]);
        }

        $arr = [];
        foreach ($buckets as $bucket) {
            $arr = array_merge($arr, $bucket); // Merge buckets
        }
        $nums = $arr;
    }

    return $nums;
}

$res = radixSort(
    [9855,123,212345,55,6666,7124]
);

var_dump($res);
