
<?php
# Complete the square sum function so that it squares each number passed into it and then sums the results together.
# For example, for [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.

function square_sum($numbers) : int {
    // Start from scratch
    $sum=0;
    // Cut it into pieces
    foreach ($numbers as $number) {
      // Keep increasing it
      $sum += $number * $number;
    }
    // Return the total
    return $sum;
  }
  // Call and print the function.
  echo square_sum([1, 2, 2]);