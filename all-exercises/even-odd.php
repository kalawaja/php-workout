
<!-- 
Even or Odd

Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers. 
-->

<?php
function even_or_odd(int $n): string {
    return $n % 2 == 0 ? "Even" : "Odd";
}

# Test
echo even_or_odd(2) . "Your input is even";
echo even_or_odd(3) . "Your input is odd";
?>

