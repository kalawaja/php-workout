
<?php

// PHP has the following types:
/*
 * `bool` boolean values (true/false)
 * int integer numbers (no decimals)
 * float floating-point numbers (decimals)
 * string strings
 * array arrays
 * object objects
 * null a value that means “no value assigned”
 */

 // `bool` boolean values (true/false)
    $isTrue = true;
    $isFalse = false;

// int integer numbers (no decimals)
    $int = 23;

// float floating-point numbers (decimals)
    $float = 23.5;

// string strings
    $string = "Hello World";

// array arrays
    $array = array("apple", "strawberry", "banana");

// object objects
    class Car {
        function Car() {
            $this->model = "VW";
        }
    }
    $car = new Car();

// null a value that means “no value assigned”
    $null = null;