
<!--
# Shortest Word

Simple, given a string of words, return the length of the shortest word(s).

String will never be empty and you do not need to account for different data types.
-->

<?php

function findShort($str) {
    $words = explode(' ', $str);
    $shortest = strlen($words[0]);
    foreach ($words as $word) {
        if (strlen($word) < $shortest) {
            $shortest = strlen($word);
        }
    }
    return $shortest;
}

# Tests
echo findShort("bitcoin take over the world maybe who knows perhaps"); // 3
echo findShort("turns out random test cases are easier than writing out basic ones"); // 3

?>