
<!--
Each resistor has a resistance value.
(Türkçesi: Her direncin bir direnç değeri vardır.)

In this exercise you are going to create a helpful program so that you don't have to remember the values of the bands.
(Türkçesi: Bu egzersizde yardımcı bir program yazacaksınız böylece bantların değerlerini hatırlamak zorunda kalmayacaksınız.)

These colors are encoded as follows:
(Türkçesi: Renkler aşağıdaki gibi kodlanır:)

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
The goal of this exercise is to create a way:
(Türkçesi: Bu egzersizin amacı şudur:)

1. To look up the numerical value associated with a particular color band
(Türkçesi: Belirli bir renk bantına karşılık gelen sayısal değeri bulmak)
2. To list the different band colors 
(Türkçesi: Farklı bant renklerini listelemek)

See: http://en.wikipedia.org/wiki/Electronic_color_code
-->

<?php

# Resistor Color (Türkçesi: Direnç Rengi)

function colorCode($color) {
    $colors = array(
        "black" => 0,
        "brown" => 1,
        "red" => 2,
        "orange" => 3,
        "yellow" => 4,
        "green" => 5,
        "blue" => 6,
        "violet" => 7,
        "grey" => 8,
        "white" => 9
    );
    return $colors[$color];
}

colorCode("red");
echo colorCode("red");