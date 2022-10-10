
<!--
Given a moment, determine the moment that would be after a gigasecond has passed.
(Türkçesi: Bir an verildiğinde, bir gigasaniye geçtikten sonra olacak anı belirleyin.)

A gigasecond is 10^9 (1,000,000,000) seconds.
(Türkçesi: Bir gigasaniye 10^9 (1,000,000,000) saniyedir.)

See(1): http://php.net/manual/en/class.datetime.php
See(2): http://en.wikipedia.org/wiki/Gigasecond
See(3): https://pine.fm/LearnToProgram/chap_09.html
-->

<?php

# Gigasecond (Türkçesi: Gigasaniye)

// Definition and Usage
// (Türkçesi: Tanım ve Kullanım)

// It is possible to return a DateTime object.
// (Türkçesi: Bir DateTime nesnesi döndürülebilir.)

// The DateTime class is used to represent a date and time.
// (Türkçesi: DateTime sınıfı bir tarihi ve saati temsil etmek için kullanılır.)

function from($date) {
    $date->add(new DateInterval('PT1000000000S'));
    return $date;
}

echo from(new DateTime('2011-04-25'))->format('Y-m-d');