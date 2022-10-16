
# Callbacks / Callables
Callbacks can be denoted by the callable type declaration.
Some functions like call_user_func() or usort() accept user-defined callback functions as a parameter. Callback functions can not only be simple functions, but also object methods, including static class methods.

<?php
// An example callback function
function my_callback_function() {
    echo 'hello world!';
}

// An example callback method
class MyClass {
    static function myCallbackMethod() {
        echo 'Hello World!';
    }
}

// Type 1: Simple callback
call_user_func('my_callback_function');
# Output: hello world!

// Type 2: Static class method call
call_user_func(array('MyClass', 'myCallbackMethod'));
# Output: Hello World!

// Type 3: Object method call
$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));
# Output: Hello World!

// Type 4: Static class method call
call_user_func('MyClass::myCallbackMethod');
# Output: Hello World!

// Type 5: Relative static class method call
class A {
    public static function who() {
        echo "A\n";
    }
}

class B extends A {
    public static function who() {
        echo "B\n";
    }
}

call_user_func(array('B', 'parent::who'));
# Output: A

// Type 6: Objects implementing __invoke can be used as callables
class C {
    public function __invoke($name) {
        echo 'Hello ', $name, "\n";
    }
}

$c = new C();
call_user_func($c, 'PHP!');
# Output: Hello PHP!

// Important Note: Generally, any object implementing __invoke() can also be passed to a callback parameter.
?>

// Callback example using a Closure

<?php
// Our closure
$double = function($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Use the closure as a callback here to
// double the size of each element in our
// range
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);
# Output: 2 4 6 8 10
?>

// Passing
A PHP function is passed by its name as a string. Any built-in or user-defined function can be used, except language constructs such as: array(), echo, empty(), eval(), exit(), isset(), list(), print or unset().