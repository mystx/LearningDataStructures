
<?php

function quicksort(array &$arr): array {
    // Base case: if array has 1 or fewer elements, it's already sorted
    $length = count($arr);
    if ($length <= 1) {
        return $arr;
    }
    
    // Choose the last element as the pivot
    $pivot = $arr[$length - 1];
    
    // Initialize left and right subarrays
    $left = [];
    $right = [];
    
    // Partition the array
    for ($i = 0; $i < $length - 1; $i++) {
        if ($arr[$i] < $pivot) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    
    // Recursively sort left and right subarrays
    $left = quicksort($left);
    $right = quicksort($right);
    
    // Combine the sorted subarrays with the pivot
    return array_merge($left, [$pivot], $right);
}

// Example usage
$testArray = [64, 34, 25, 12, 22, 11, 90];
echo "Original array: " . implode(", ", $testArray) . "\n";

$sortedArray = quicksort($testArray);
echo "Sorted array: " . implode(", ", $sortedArray) . "\n";