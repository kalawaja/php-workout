<?php

# There was a test in your class and you passed it. Congratulations!

# But you're an ambitious person. You want to know if you're better than the average student in your class.

# You receive an array with your peers' test scores. Now calculate the average and compare your score!

# Return True if you're better, else False!

/* 
Note:
Your points are not included in the array of your class's points. For calculating the average point you may add your point to the given array!
*/

function averageStudent($classPoints, $yourPoint) {
  // Addition the points the class
  $sum = array_sum($classPoints);
  // Count the points in the class
  $count = count($classPoints);
  // Find the class average
  $average = $sum / $count;
  // Compare the average to your point
  return $yourPoint > $average;
}
// Print the comparison result
echo averageStudent([2, 3, 5, 4, 1, 3], 3) ? "true" : "false";  // false
echo "<br>";
echo averageStudent([2, 3, 5, 4, 1, 3], 4) ? "true" : "false";  // true