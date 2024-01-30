<?php
/*
 * Author: Bostigger
 *
 * Problem:
 * Given an integer array [nums], return true if any value appears at least twice in the array,
 * and return false if every element is distinct.
 */


function containsDuplicates(array $nums) {
    // Initialize an associative array to track encountered numbers.
    $trackNums = [];

    // Iterate through each number in the provided array.
    foreach ($nums as $num) {
        // Check if the current number is already in the tracking array.
        // The use of `isset` is for performance, and `array_key_exists` covers cases where the value might be null.
        if (isset($trackNums[$num]) || array_key_exists($num, $trackNums)) {
            // If the number is found, a duplicate exists. Return true.
            return true;
        } else {
            // If the number is not found, add it to the tracking array for future reference.
            $trackNums[$num] = true;
        }
    }

    // If no duplicates are found after checking all numbers, return false.
    return false;
}

// Example usage of the function.

// Define an array of numbers to check for duplicates.
$nums = [1, 2, 4, 5, 6, 3, 4];

// Call the containsDuplicates function with the defined array.
if (containsDuplicates($nums)) {
    // If the function returns true, duplicates are present.
    echo "True - Duplicates found\n";
} else {
    // If the function returns false, there are no duplicates.
    echo "False - No Duplicates found\n";
}
