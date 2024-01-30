<?php

/*
 * Author: Bostigger
 *
 * Given two strings s and t, return true if t is an anagram of s, and false otherwise.
 * Anagram is a word or phrase formed by rearranging the letters of a different word or phrase,
 * typically using all the original letters exactly once.
 */

function anagramChecker($s, $t) {
    // First, check if the two strings have the same length. If not, they cannot be anagrams.
    if (strlen($s) != strlen($t)) {
        return false;
    }

    // Use count_chars to get an associative array of each character's ASCII value => count in $s
    $original_array = count_chars($s, 1);

    // Repeat for the second string
    $compare_array = count_chars($t, 1);

    // Iterate through each character count in the first string's array
    foreach ($original_array as $char => $count) {
        // Check if the character is present in the second string's array and has the same count
        if (!isset($compare_array[$char]) || $compare_array[$char] != $count) {
            // If a character is missing or counts differ, the strings are not anagrams
            return false;
        }
    }

    // If all characters match in count, the strings are anagrams
    return true;
}

// Example usage of the function
if (anagramChecker("aacc", "ccac")) {
    echo "t is an anagram of s";
} else {
    echo "t is not an anagram of s";
}