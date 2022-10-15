
//======================================================================
// PHP SUPPORTS 10 PRIMITIVE TYPES.
//======================================================================

//----------------------------------------------------------------------
// Four scalar types:
//----------------------------------------------------------------------

1. bool (boolean)
2. int (integer)
3. float (floating-point number)
4. string

//----------------------------------------------------------------------
// Four compound types:
//----------------------------------------------------------------------

1. array
2. object
3. callable
4. iterable

//----------------------------------------------------------------------
// And finally two special types:
//----------------------------------------------------------------------

1. resource (external resources)
2. NULL (no value)

<?php
$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer

echo gettype($a_bool); // prints out:  boolean
echo gettype($a_str);  // prints out:  string

// If this is an integer, increment it by four
if (is_int($an_int)) {
    $an_int += 4;
}

// If $a_bool is a string, print it out
// (does not print out anything)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>