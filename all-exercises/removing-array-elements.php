<?php

# Removing Elements

# Always keep the first element and start removing with the next element.

/*
# Example:
["Keep", "Remove", "Keep", "Remove", ...] --> ["Keep", "Keep", ...]
*/

function removeEveryOther($array) {
    foreach ($array as $key => $value) {
        //Since the first index of arrays is 0;
        if ($key % 2 !== 0) {
            unset($array[$key]);
        }
    }
    return $array;
}

# Test
print_r(removeEveryOther(['Hello', 'Goodbye', 'Hello Again']));
print_r(removeEveryOther([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));