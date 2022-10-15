
# Booleans
This is the simplest type. A bool expresses a truth value. It can be either true or false.

<?php
var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)

# Warnings: -1 is considered true, like any other non-zero(whether negative or positive) number.
var_dump((bool) -1);        // bool(true)
var_dump((bool) 0);         // bool(false)
?>

# Type casting to bool (From booleans)
False will yield 0 (zero), and true will yield 1 (one).