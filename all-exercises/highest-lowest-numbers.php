
<!--
# Highest and Lowest

In this little assignment you are given a string of space separated numbers, and have to return the highest and lowest number.

Examples
highAndLow("1 2 3 4 5");  // return "5 1"
highAndLow("1 2 -3 4 5"); // return "5 -3"
highAndLow("1 9 3 4 -5"); // return "9 -5"

Notes
All numbers are valid Int32, no need to validate them.
There will always be at least one number in the input string.
Output string must be two numbers separated by a single space, and highest number is first. 
-->

<?php

function highAndLow($numbers)
{
    $numbers = explode(' ', $numbers);
    $highest = $numbers[0];
    $lowest = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $highest) {
            $highest = $number;
        }
        if ($number < $lowest) {
            $lowest = $number;
        }
    }
    return $highest . ' ' . $lowest;
}

echo highAndLow("1 2 3 4 5") . PHP_EOL;         // 5 1
echo highAndLow("1 2 -3 4 5") . PHP_EOL;        // 5 -3
echo highAndLow("1 9 3 4 -5") . PHP_EOL;        // 9 -5

?>

<?php
/*
# Solution 2 - Using max() and min() functions

function highAndLow($numbers)
{
    $numbers = explode(' ', $numbers);
    return max($numbers) . ' ' . min($numbers);
}

echo highAndLow("1 2 3 4 5") . PHP_EOL;         // 5 1
echo highAndLow("1 2 -3 4 5") . PHP_EOL;        // 5 -3
echo highAndLow("1 9 3 4 -5") . PHP_EOL;        // 9 -5
*/
?>