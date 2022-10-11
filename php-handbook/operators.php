
<?php

/*
# Arithmetic Operators
+   : (Addition)
-   : (Subtraction)
*   : (Multiplication)
/   : (Division)
%   : (Remainder)
**  : (Exponentiation)

# Assignment Operators
=   : (Assignment)
+=  : (Addition Assignment)
-=  : (Subtraction Assignment)
*=  : (Multiplication Assignment)
/=  : (Division Assignment)
%=  : (Remainder Assignment)
**= : (Exponentiation Assignment)

# Comparison Operators
==  : (Equal)
=== : (Identical)
!=  : (Not Equal)
<>  : (Not Equal)
!== : (Not Identical)
>   : (Greater Than)
<   : (Less Than)
>=  : (Greater Than or Equal To)
<=  : (Less Than or Equal To)
<=> : (Spaceship)

# Increment/Decrement Operators
++  : (Increment)
--  : (Decrement)

# Logical Operators
and : (And)
&&  : (And)
or  : (Or)
||  : (Or)
xor : (Xor)
!   : (Not)

# String Operators
.   : (Concatenation)
.=  : (Concatenation Assignment)


# Array Operators
+   : (Union)
==  : (Equality)
=== : (Identity)
!=  : (Inequality)
<>  : (Inequality)
!== : (Non-identity)


# Conditional Assignment Operators
?:  : (Ternary)
??  : (Null Coalescing)

*/

$base = 10;
$height = 5;
$area = $base * $height / 2;    // Output: 25

2 < 1;    // Output: false
1 <= 1;    // Output: true
1 <= 2;    // Output: true
1 == 1;    // Output: true

# important: == returns true if the two operands are equal.
# important: === returns true if the two operands are identical.

1 == '1';    // Output: true
1 === '1';    // Output: false

1 != 1;    // Output: false
1 <> 1;    // Output: false
1 !== 1;    // Output: false

1 != '1';    // Output: false
1 <> '1';    // Output: false
1 !== '1';    // Output: true

# important: Logical operators work with boolean values:
1 > 2 || 2 > 1;     // Output: true
1 !== 2 && 2 > 2;   // Output: false

# We also have the not operator:
$test = true;
!$test;         // Output: false

# PHP also has 2 unary operators: ++ and --:
$number = 1;
++$number;      // Output: 2

$number = 1;
$number++;      // Output: (number is now) 2

# important: The difference between the two is that the first one increments the value of the variable and returns the new value, while the second one returns the value of the variable and then increments it.

$age = 32;
$age++;         // Output: (age is now) 33
$age--;         // Output: (age is now) 32










