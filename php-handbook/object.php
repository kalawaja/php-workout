
# Objects

# Object Initialization
To create a new object, use the new statement to instantiate a class:

<?php
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();
# Output: Doing foo. 
?>

# Converting to object
If an object is converted to an object, it is not modified. If a value of any other type is converted to an object, a new instance of the stdClass built-in class is created. If the value was null, the new instance will be empty. An array converts to an object with properties named by keys and corresponding values:

<?php
$obj = (object) array('1' => 'foo');

var_dump(isset($obj->{'1'}));
# Output: bool(true)

var_dump(key($obj)); 
# Output: string(1) "1"
?>

# For any other value, a member variable named scalar will contain the value:

<?php
$obj = (object) 'ciao';
echo $obj->scalar;
# Output: ciao
?>

# Important: By far the easiest and correct way to instantiate an empty generic php object that you can then modify for whatever purpose you choose:

<?php $genericObject = new stdClass(); ?>