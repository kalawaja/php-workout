
<?php

# Reverse a string (Türkçesi: bir dizeyi ters çevirin) [1.Yöntem]

function reverseString($str) {
    return strrev($str);
}

reverseString("Hello World!");
echo reverseString("Hello World!");

echo "<br><br>";

# Reverse a string (Türkçesi: bir dizeyi ters çevirin) [2.Yöntem]

function re($a) {
    return strrev ($a);
}
$a =  "Hi there!";
echo re($a);