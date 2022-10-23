
# Floating point numbers
Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using any of the following syntaxes:

<?php
$x = 1.234;
?>

<?php
# Comparing floats
$x = 8 - 6.4;  // which is equal to 1.6
$y = 1.6;
var_dump($x == $y); // is not true

# PHP thinks that 1.6 (coming from a difference) is not equal to 1.6. To make it work, use round()
var_dump(round($x, 2) == round($y, 2)); // this is true

# This happens probably because $x is not really 1.6, but 1.599999.. and var_dump shows it to you as being 1.6.
?>


# From strings
If the string is numeric or leading numeric then it will resolve to the corresponding float value, otherwise it is converted to zero (0).

<?php
# PHP Float Data Type - Full PHP 8 Tutorial 8/105

$x=13.5;
echo $x."\n";    //13.5

$y=13.5e3;
echo $y."\n";    //13.500

$z=13.5e-3;
echo $z."\n";    //0.0135

$t=13.5e-3;
var_dump($t);    //float(0.0135)

$u=13.5e3;
var_dump($u);    //float(13500)

$v=13_000.5e3;
var_dump($v);    //float(13000500)

echo PHP_FLOAT_MAX;    //1.7976931348623E+308

echo "\n";

$b=floor((0.1+0.7)*10);
echo $b."\n";        //7

$c=ceil((0.1+0.7)*10);
echo $c."\n";        //8

$d=ceil((0.1+0.2)*10);
echo $d."\n";        //4

$e=0.23;
$f=1-0.77;
var_dump($e, $f); //float(0.23) float(0.22999999999999998)
if ($e==$f) {
    echo 'Yes'."\n";
} else {
    echo 'No'."\n";
}
//No

$g=PHP_FLOAT_MAX *2;
var_dump($g);
var_dump(is_infinite($g));      //float(INF)
var_dump(is_finite($g));        //bool(true)
var_dump(is_nan($g));           //bool(false)
var_dump(is_finite(log(-1)));   //bool(false)

$h=5;
var_dump($h);               //int(5)
var_dump((float) $h);      //float(5)

$i='calm';
var_dump((float) $i);      //float(0)

$j='15.5a';
var_dump((float) $j);      //float(15.5)
?>