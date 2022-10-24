
# NULL
The special null value represents a variable with no value. null is the only possible value of type null.

// A variable is considered to be null if:
- it has been assigned the constant null.
- it has not been set to any value yet.
- it has been unset().

# Important Note: There is only one value of type null, and that is the case-insensitive constant null ;

<?php
$var = NULL;       
?>

# is_null —> Finds whether a variable is null 
             (Returns true if value is null, false otherwise.)

<?php
error_reporting(E_ALL);

$foo = NULL;
var_dump(is_null($inexistent), is_null($foo));
// Output: bool(true) bool(true)
?>

# Important Note: Casting a variable to null using (unset) $var will not remove the variable or unset its value. It will only return a null value.

# unset —> Unset a given variable. Destroys the specified variables.
           (Unset the given variables.)

// The behavior of unset() inside of a function can vary depending on what type of variable you are attempting to destroy.

// If a globalized variable is unset() inside of a function, only the local variable is destroyed. The variable in the calling environment will retain the same value as before unset() was called.

<?php
function destroy_foo() 
{
    global $foo;
    unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo;
// Output: bar
?>

# Important Note: To unset() a global variable inside of a function, then use the $GLOBALS array to do so:

<?php
function foo() 
{
    unset($GLOBALS['bar']);
}

$bar = "something";
foo();
echo $bar;
// Output: something
?>

<?php
// destroy a single variable
unset($foo);

// destroy a single element of an array
unset($bar['quux']);

// destroy more than one variable
unset($foo1, $foo2, $foo3);
?>

<?php
// PHP Null Data Type - Full PHP 8 Tutorial 10/105

// NULL
// null constant

$x=null;
echo $x;
var_dump($x);               //NULL
var_dump(is_null($x));      //bool(true)

$y=123;
var_dump(is_null($y));      //bool(false)

$z=123;
var_dump($z===null);        //bool(false)

$t=null;
var_dump($t===null);        //bool(true)

$u=123;
var_dump($u);        //int(123)
unset($u);           //Unset a given variable
/* 
unset() 
destroys the specified variables. 
*/
var_dump($u);        //(Warning:...) NULL

$v=null;
var_dump((string) $v);        //string(0) ""

$vv=null;
var_dump((int) $vv);        //int(0)

$vvv=null;
var_dump((bool) $vvv);        //bool(false)

$vvvv=null;
var_dump((array) $vvvv);        //array(0){}
?>