
<?php

# Resistor Color (Türkçesi: Direnç Rengi)

/*
Color Encoding of Resistors (Türkçesi: Dirençlerin Renk Kodlaması)

Black: 0
Brown: 1
Red: 2
Orange: 3
Yellow: 4
Green: 5
Blue: 6
Violet: 7
Grey: 8
White: 9
*/

const COLORS = array(
    "black",
    "brown",
    "red",
    "orange",
    "yellow",
    "green",
    "blue",
    "violet",
    "grey",
    "white"
);

function colorCode(string $color): int
{
    return array_search($color, COLORS);
}

echo colorCode("red");
