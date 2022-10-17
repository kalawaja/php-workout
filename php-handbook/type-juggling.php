
# Type Juggling
PHP does not require explicit type definition in variable declaration. In this case, the type of a variable is determined by the value it stores. That is to say, if a string is assigned to variable $var, then $var is of type string. If afterwards an int value is assigned to $var, it will be of type int.

// PHP may attempt to convert the type of a value to another automatically in certain contexts. The different contexts which exist are:
- Numeric
- String
- Logical
- Integral and string
- Comparative
- Function

// Note: Use the settype() function to change the type of a variable.

# Type Casting
Type casting converts the value to a chosen type by writing the type within parentheses before the value to convert.

// The casts allowed are:
+ (int) -> cast to int
+ (bool) -> cast to bool
+ (float) -> cast to float
+ (string) -> cast to string
+ (array) -> cast to array
+ (object) -> cast to object
+ (unset) -> cast to NULL

// Important Note: 
-> (integer) is an alias of the (int) cast. 
-> (boolean) is an alias of the (bool) cast. 
-> (binary) is an alias of the (string) cast. 
-> (double) is aliases of the (float) cast. 
These casts do not use the canonical type name and are not recommended.

<?php
$foo = 10;   // $foo is an integer
$bar = (bool) $foo;   // $bar is a boolean
?>

// Note: Instead of casting a variable to a string, it is also possible to enclose the variable in double quotes:

<?php
$foo = 10;            // $foo is an integer
$str = "$foo";        // $str is a string
$fst = (string) $foo; // $fst is also a string

// This prints out that "they are the same"
if ($fst === $str) {
    echo "they are the same";
}
?>

<?php
# Important Example;

$a    = 'car'; // $a is a string
$a[0] = 'b';   // $a is still a string
echo $a;       // bar
?>