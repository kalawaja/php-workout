
# Floating point numbers
Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using any of the following syntaxes:

<?php
$x = 1.234;
?>

<?php
# Comparing floats
$x = 8 - 6.4;  // which is equal to 1.6
$y = 1.6;
var_dump($x == $y); // is not true

# PHP thinks that 1.6 (coming from a difference) is not equal to 1.6. To make it work, use round()
var_dump(round($x, 2) == round($y, 2)); // this is true

# This happens probably because $x is not really 1.6, but 1.599999.. and var_dump shows it to you as being 1.6.
?>


# From strings
If the string is numeric or leading numeric then it will resolve to the corresponding float value, otherwise it is converted to zero (0).