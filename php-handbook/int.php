
# Integers
An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}.

<?php
# To use octal notation, precede the number with a 0 (zero).

$x = 0123;          // 83
$y = "0123" + 0     // 123
?>

Note: A value can also be converted to int with the intval() function.

<?php
# There is no int division operator in PHP, to achieve this use the intdiv() function. 1/2 yields the float 0.5. The value can be cast to an int to round it towards zero, or the round() function provides finer control over rounding

var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)
?>