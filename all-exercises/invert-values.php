<?php

# Invert Values 

# Given a set of numbers, return the additive inverse of each. Each positive becomes negatives, and the negatives become positives.

# invert([1,2,3,4,5]) == [-1,-2,-3,-4,-5]
# invert([1,-2,3,-4,5]) == [-1,2,-3,4,-5]
# invert([]) == []

# You can assume that all values are integers. 
# Do not mutate the input array/list.

function invert(array $a): array {
    // Return an array with all values inverted
    return array_map(function($n) {
        // If the number is positive, make it negative or if ...
        return $n * -1;
    }, $a);
}

// Print the result
print_r(invert([1,2,3,4,5]));  // [-1,-2,-3,-4,-5]


# array_map() example
/*
<?php
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);
?>

# This makes $b have: 
# Output:
Array
(
    [0] => 1
    [1] => 8
    [2] => 27
    [3] => 64
    [4] => 125
)
*/