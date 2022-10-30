
<!--
# Multiply order

Beginner - Reduce but Grow

Given a non-empty array of integers, return the result of multiplying the values together in order. Example:

[1, 2, 3, 4] => 1 * 2 * 3 * 4 = 24
-->

<?php

function grow($a) {
    $product = 1;
    foreach ($a as $value) {
        $product *= $value;
    }
    return $product;
}

# Tests
echo grow([1, 2, 3]) . "\n";        // 6
echo grow([1, 2, 3, 4, 5]) . "\n";  // 120
