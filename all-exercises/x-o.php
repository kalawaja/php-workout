
<!-- 
# Exes and Ohs

Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. The string can contain any char.

Examples input/output:

XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false
-->

<?php

function XO($s) {
    $s = strtolower($s);
    $x = substr_count($s, 'x');
    $o = substr_count($s, 'o');
    return $x == $o;
}

# Tests
echo XO('ooxx') ? 'true' : 'false';         // true 
echo XO('xooxx') ? 'true' : 'false';        // false
echo XO('ooxXm') ? 'true' : 'false';        // true
echo XO('zpzpzpp') ? 'true' : 'false';      // true
echo XO('zzoo') ? 'true' : 'false';         // false

?>
