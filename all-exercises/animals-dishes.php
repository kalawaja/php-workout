<?php

# The Feast of Many Beasts

# All of the animals are having a feast! Each animal is bringing one dish. There is just one rule: the dish must start and end with the same letters as the animal's name. For example, the (g)reat blue hero[n] is bringing (g)arlic naa[n] and the (c)hickade[e] is bringing (c)hocolate cak[e].

# Write a function "feast" that takes the animal's name and dish as arguments and returns true or false to indicate whether the beast is allowed to bring the dish to the feast.

# Assume that "beast" and "dish" are always lowercase strings, and that each has at least two letters. "beast" and "dish" may contain hyphens and spaces, but these will not appear at the beginning or end of the string. They will not contain numerals.

function feast($beast, $dish) {
    $beastFirstLetter = substr($beast, 0, 1);
    $beastLastLetter = substr($beast, -1);
    $dishFirstLetter = substr($dish, 0, 1);
    $dishLastLetter = substr($dish, -1);
    // Check if the first and last letters of the beast and dish are the same
    if ($beastFirstLetter === $dishFirstLetter 
        && 
        $beastLastLetter === $dishLastLetter) {
        return true . " - Dish accepted. Welcome, beast." . "<br>";
    } else {
        return false . " - Dish rejected. Sorry, beast." . "<br>";
    }
}

# Test
echo feast("great blue heron", "garlic naan") . "";
echo feast("chickadee", "chocolate cake") . "";
echo feast("brown bear", "bear claw") . "";

# Expected output
# 1 - Dish accepted. Welcome, beast.
# 1 - Dish accepted. Welcome, beast.
#  - Dish rejected. Sorry, beast.

# Example: Using a negative offset/length with substr()

/*
<?php
$rest = substr("abcdef", -1);    // returns "f"
$rest = substr("abcdef", -2);    // returns "ef"
$rest = substr("abcdef", -3, 1); // returns "d"

$rest = substr("abcdef", 0, -1);  // returns "abcde"
$rest = substr("abcdef", 2, -1);  // returns "cde"
$rest = substr("abcdef", -3, -1); // returns "de"
?>
*/