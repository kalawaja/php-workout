
<!--
# Remove exclamation marks

Write function RemoveExclamationMarks which removes all exclamation marks from a given string.
-->

<?php

function remove_exclamation_marks($string) {
    return str_replace('!', '', $string);
}

# Test
echo remove_exclamation_marks("Hello World!") . "\n"; // Hello World
echo remove_exclamation_marks("Hello World!!!") . "\n"; // Hello World
echo remove_exclamation_marks("Hi! Hello!") . "\n"; // Hi Hello
echo remove_exclamation_marks("") . "\n"; //

?>