
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

# This is done by assigning values to the array, specifying the key in brackets. The key can also be omitted, resulting in an empty pair of brackets ([]) ;

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
# Arrays can be destructured using the [] or list() language constructs. These constructs can be used to destructure an array into distinct variables ;

<?php
$source_array = ['foo', 'bar', 'baz'];

[$foo, $bar, $baz] = $source_array;

echo $foo;
# Output: foo
echo $bar;
# Output: bar
echo $baz;
# Output: baz
?>

# Array destructuring can be used in foreach to destructure a multi-dimensional array while iterating over it ;

<?php
$source_array = [
    [1, 'John'],
    [2, 'Jane'],
];

foreach ($source_array as [$id, $name]) {
    // logic here with $id and $name
}
unset($id, $name);
var_dump($id, $name);
# Output: Warning: Undefined variable $id in /path/to/file.php on line ...
# Output: Warning: Undefined variable $name in /path/to/file.php on line ...
?>

# Array elements will be ignored if the variable is not provided. Array destructuring always starts at index 0 ;

<?php
$source_array = ['foo', 'bar', 'baz'];

// Assign the element at index 2 to the variable $baz
[, , $baz] = $source_array;

echo $baz;
# Output: baz
?>

# As of PHP 7.1.0, associative arrays can be destructured too. This also allows for easier selection of the right element in numerically indexed arrays as the index can be explicitly specified ;

<?php
$source_array = ['foo' => 1, 'bar' => 2, 'baz' => 3];

// Assign the element at index 'baz' to the variable $three
['baz' => $three] = $source_array;

echo $three;
# Output: 3

$source_array = ['foo', 'bar', 'baz'];

// Assign the element at index 2 to the variable $baz
[2 => $baz] = $source_array;

echo $baz;
# Output: baz
?>

# Array destructuring can be used for easy swapping of two variables ;

<?php
$a = 1;
$b = 2;

[$b, $a] = [$a, $b];

echo $a;
# Output: 2
echo $b;
# Output: 1
?>

# Note: The unset() function allows removing keys from an array. Be aware that the array will not be reindexed. If a true "remove and shift" behavior is desired, the array can be reindexed using the array_values() function.

<?php
$a = array(1 => 'one', 2 => 'two', 3 => 'three');
unset($a[2]);
var_dump($a);
# Output: array(2) { [1]=> string(3) "one" [3]=> string(5) "three" }
// Important Note: The array is not reindexed, so the key 2 is still present with a NULL value. 

$b = array_values($a);
var_dump($b);
# Output: array(2) { [0]=> string(3) "one" [1]=> string(5) "three" }
// Important Note: Now $b is array(0 => 'one', 1 =>'three')
?>

# The foreach control structure exists specifically for arrays. It provides an easy way to traverse an array.

# Array do's and don'ts
# Why is $foo[bar] wrong?
Always use quotes around a string literal array index. For example, $foo['bar'] is correct, while $foo[bar] is not. But why? It is common to encounter this kind of syntax in old scripts:

<?php
// $foo[bar] = 'enemy';
// echo $foo[bar];
?>

# Important Note: This is wrong, but it works. The reason is that this code has an undefined constant (bar) rather than a string ('bar' - notice the quotes). It works because PHP automatically converts a bare string (an unquoted string which does not correspond to any known symbol) into a string which contains the bare string. For instance, if there is no defined constant named bar, then PHP will substitute in the string 'bar' and use that.

# Note: This does not mean to always quote the key. Do not quote keys which are constants or variables, as this will prevent PHP from interpreting them.

<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
// Simple array:
$array = array(1, 2);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "\nChecking $i: \n";
    echo "Bad: " . $array['$i'] . "\n";
    echo "Good: " . $array[$i] . "\n";
    echo "Bad: {$array['$i']}\n";
    echo "Good: {$array[$i]}\n";
}

/* Output: 

Checking 0: 
Notice: Undefined index:  $i in ...
Bad: 
Good: 1
Notice: Undefined index:  $i in ...
Bad: 
Good: 1

Checking 1: 
Notice: Undefined index:  $i in ...
Bad: 
Good: 2
Notice: Undefined index:  $i in ...
Bad: 
Good: 2
*/
?>

# Important Result: To reiterate, inside a double-quoted string, it's valid to not surround array indexes with quotes so "$foo[bar]" is valid.
For any of the types int, float, string, bool and resource, converting a value to an array results in an array with a single element with index zero and the value of the scalar which was converted. 
// Important: In other words, (array)$scalarValue is exactly the same as array($scalarValue).

# Note: Converting null to an array results in an empty array.

<?php
$array = (array) null;
var_dump($array);
# Output: array(0) { }
?>

# It is possible to compare arrays with the array_diff() function and with array operators.

<?php
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
var_dump($result);
# Output: array(1) { [0]=> string(4) "blue" }
?>

# Array unpacking
An array prefixed by ... will be expanded in place during the definition of the array. 
It's possible to expand multiple times, and add normal elements before or after the ... operator:

<?php
// Using short array syntax.
// Also, works with array() syntax.
$arr1 = [1, 2, 3];
$arr2 = [...$arr1]; //[1, 2, 3]
$arr3 = [0, ...$arr1]; //[0, 1, 2, 3]
$arr4 = [...$arr1, ...$arr2, 111]; //[1, 2, 3, 1, 2, 3, 111]
$arr5 = [...$arr1, ...$arr1]; //[1, 2, 3, 1, 2, 3]

function getArr() {
  return ['a', 'b'];
}
$arr6 = [...getArr(), 'c' => 'd']; //['a', 'b', 'c' => 'd']
?>

# Note: Unpacking an array with the ... operator follows the semantics of the array_merge() function. That is, later string keys overwrite earlier ones and integer keys are renumbered ;

<?php
// string key
$arr1 = ["a" => 1];
$arr2 = ["a" => 2];
$arr3 = ["a" => 0, ...$arr1, ...$arr2];
var_dump($arr3); // ["a" => 2]

// integer key
$arr4 = [1, 2, 3];
$arr5 = [4, 5, 6];
$arr6 = [...$arr4, ...$arr5];
var_dump($arr6); // [1, 2, 3, 4, 5, 6]
// Which is [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6]
// where the original integer keys have not been retained.
?>

(For all examples see: https://www.php.net/manual/en/language.types.array.php#language.types.array.foo-bar)





