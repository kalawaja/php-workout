
<?php

# Reverse a string (Türkçesi: bir dizeyi ters çevirin) [1.Yöntem]

function reverseString($str) {
    return strrev($str);
}

reverseString("Hello World!");
echo reverseString("Hello World!");

echo "<br><br>";

# Reverse a string (Türkçesi: bir dizeyi ters çevirin) [2.Yöntem]

// Definition and Usage 
// (Türkçesi: Tanım ve Kullanım)

// The strrev() function reverses a string.
// (Türkçesi: strrev() fonksiyonu bir dizenin tersini alır.)

function re($a) {
    return strrev ($a);
}
$a =  "Hi there!";
echo re($a);