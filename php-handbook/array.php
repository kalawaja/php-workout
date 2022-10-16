
# Array

# Specifying with array() 
An array can be created using the array() language construct. It takes any number of comma-separated key => value pairs as arguments.

<?php
$varname = array(
    "key" => "value",
    "key2" => "value2",
    "key3" => "value3",
    # ...
);
?>

Note: The comma after the last array element is optional and can be omitted. This is usually done for single-line arrays, i.e. array(1, 2) is preferred over array(1, 2, ). For multi-line arrays on the other hand the trailing comma is commonly used, as it allows easier addition of new elements at the end.

Note: A short array syntax exists which replaces array() with [] ;
<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Using the short array syntax
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
?>

// The key can either be an int or a string. The value can be of any type.

Note: If multiple elements in the array declaration use the same key, only the last one will be used as all others are overwritten ;
<?php
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);
# Output: array(1) { [1]=> string(1) "d" }

// Result : As all the keys in the above example are cast to 1, the value will be overwritten on every new element and the last assigned value "d" is the only one left over.
?>

// PHP arrays can contain int and string keys at the same time as PHP does not distinguish between indexed and associative arrays ;

<?php
$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);
# Output: array(4) { ["foo"]=> string(3) "bar" ["bar"]=> string(3) "foo" [100]=> int(-100) [-100]=> int(100) }
?>

// The key is optional. If it is not specified, PHP will use the increment of the largest previously used int key ;

<?php
$array = array("foo", "bar", "hello", "world");
var_dump($array);
# Output: array(4) { [0]=> string(3) "foo" [1]=> string(3) "bar" [2]=> string(5) "hello" [3]=> string(5) "world" }
?>

// It is possible to specify the key only for some elements and leave it out for others:

<?php
$array = array(
         "a",
         "b",
    6 => "c",
         "d",
);
var_dump($array);
# Output: array(4) { [0]=> string(1) "a" [1]=> string(1) "b" [6]=> string(1) "c" [7]=> string(1) "d" }

# Important Result : As you can see the last value "d" was assigned the key 7. This is because the largest integer key before that was 6.
?>

// This important example includes all variations of type casting of keys and overwriting of elements. You will better understand with this example!

<?php
$array = array(
    1    => 'a',
    '1'  => 'b', // the value "a" will be overwritten by "b"
    1.5  => 'c', // the value "b" will be overwritten by "c"
    -1 => 'd',
    '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
    true => 'g', // the value "c" will be overwritten by "g" (as true is cast to 1)
    false => 'h',
    '' => 'i',
    null => 'j', // the value "i" will be overwritten by "j" (as null is cast to "")
    'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l', // the value "k" will be overwritten by "l"
);
var_dump($array);
# Output: array(7) {[1]=> string(1) "g" [-1]=> string(1) "d" ["01"]=> string(1) "e" ["1.5"]=> string(1) "f" [0]=> string(1) "h" [""]=> string(1) "j" [2]=> string(1) "l" }
?>

# Accessing array elements

<?php
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);
var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
# Output: string(3) "bar" int(24) string(3) "foo"
?>

<?php
function getArray() {
    return array(1, 2, 3);
}
$secondElement = getArray()[1];
var_dump($secondElement);
# Output: int(2)
?>

# Creating/modifying with square bracket syntax
An existing array can be modified by explicitly setting values in it.

This is done by assigning values to the array, specifying the key in brackets. The key can also be omitted, resulting in an empty pair of brackets ([]) ;

<?php
$arr["key"] = "value";
$arr[23] = "value";
$arr[] = "value";
var_dump($arr);
// key may be an int or string
// value may be any value of any type
# Output: array(3) { ["key"]=> string(5) "value" [23]=> string(5) "value" [0]=> string(5) "value" }
?>

# Important Note: To change a certain value, assign a new value to that element using its key. To remove a key/value pair, call the unset() function on it ;

<?php
$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
                // at this point of the script

$arr["x"] = 42; // This adds a new element to
                // the array with key "x"
                
unset($arr[5]); // This removes the element from the array

unset($arr);    // This deletes the whole array
?>

# Important Examples : Great examples to learn better ;
<?php
// Create a simple array.
$array = array(1, 2, 3, 4, 5);
print_r($array);
# Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);
# Output: Array ( )

// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);
# Output: Array ( [5] => 6 )

// Re-index:
$array = array_values($array);
$array[] = 7;
print_r($array);
# Output: Array ( [0] => 6 [1] => 7 )
?>

# Array destructuring 

<!-- √√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√
,,, I stopped here. .........................................
I will continue later. ......................................
√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√√--> 