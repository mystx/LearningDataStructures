<?php

/**
 * Helper function to recursively get odd numbers from an array
 */
class Helper {

    private $result = [];

    public function helper($inputArray)
    {
        if(count($inputArray) == 0) {
            return;
        }

        if($inputArray[0]%2 != 0) {
            array_push($this->result,$inputArray[0]);
        }

        $this->helper(array_slice($inputArray,1));
    }

    public function getResult($inputArray)
    {
        $this->helper($inputArray);
        return $this->result;
    }
}

$h = new Helper;
$res = $h->getResult([1,2,3,4,5,6,7,8,9,10]);
die(var_dump($res));