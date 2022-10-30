
<!--
# String repeat

Write a function that accepts an integer n and a string s as parameters, and returns a string of s repeated exactly n times.

Examples (input -> output)
6, "I"     -> "IIIIII"
5, "Hello" -> "HelloHelloHelloHelloHello"
-->

<?php

function repeatStr($n, $str) {
    return str_repeat($str, $n);
}

# Tests
echo repeatStr(6, "I");     // "IIIIII"
echo repeatStr(5, "Hello"); // "HelloHelloHelloHelloHello"

?>