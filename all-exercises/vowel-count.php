
<!--
# Vowel Count

Return the number (count) of vowels in the given string.

We will consider a, e, i, o, u as vowels for this Kata (but not y).

The input string will only consist of lower case letters and/or spaces.
-->

<?php

function getCount($str) {
  $vowelsCount = 0;
  $vowels = ['a', 'e', 'i', 'o', 'u'];
  $str = str_split($str);
  foreach ($str as $char) {
    if (in_array($char, $vowels)) {
      $vowelsCount++;
    }
  }
  return $vowelsCount;
}

echo getCount("abracadabra");   // 5
echo getCount("pear tree");     // 4

?>