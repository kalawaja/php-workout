
# Integers
An int is a number of the set ℤ = {..., -2, -1, 0, 1, 2, ...}.

<?php
# To use octal notation, precede the number with a 0 (zero).

$x = 0123;          // 83
$y = "0123" + 0     // 123
?>

Note: A value can also be converted to int with the intval() function.

<?php
# There is no int division operator in PHP, to achieve this use the intdiv() function. 1/2 yields the float 0.5. The value can be cast to an int to round it towards zero, or the round() function provides finer control over rounding

var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)
?>

<?php
# PHP Integer Data Type - Full PHP 8 Tutorial 7/105

$x=5;
echo $x."\n";   //5

$y=0x2A;
echo $y."\n";   //42

$z=05;
echo $z."\n";   //5

$t=055;
echo $t."\n";   //45

$u=0b11;
echo $u."\n";   //3

$v=0b110;
echo $v."\n";   //6

$a=PHP_INT_MAX;
echo $a."\n";   //9223372036854775807

$b=PHP_INT_MAX + 1;
echo $b."\n";   //9.2233720368548E+18

$c=PHP_INT_MAX;
var_dump($c);   //int(9223372036854775807)

$d=PHP_INT_MAX + 1;
var_dump ($d);  //float(9.223372036854776E+18)

$e=(int) true;
var_dump($e);   //int(1)

$e=(int) false;
var_dump($e);   //int(0)

$f=(int) 5.98;
var_dump($f);   //int(5)

$g=(int) '5.98';
var_dump($g);   //int(5)

$h=(int) 'test';
var_dump($h);   //int(0)

$i=(int) null;
var_dump($i);   //int(0)

$j=(int) null;
var_dump(is_int($j));   //bool(true)

$k=null;
var_dump(is_int($k));   //bool(false)

$l=200_000;
var_dump($l);   //int(200000)

$m=2_000_000_000;
var_dump($m);   //int(2000000000)

$n='2_000_000_000';
var_dump($n);   //string(13) "2_000_000_000"

$o=(int) '2_000_000_000';
var_dump($o);   //int(2)
?>