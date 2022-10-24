<!--
# Strings
A string is series of characters, where a character is the same as a byte. This means that PHP only supports a 256-character set, and hence does not offer native Unicode support.

# Syntax
A string literal can be specified in four different ways:

1. Single quoted
2. Double quoted
3. Heredoc syntax
4. Nowdoc syntax

# Single quoted
The simplest way to specify a string is to enclose it in single quotes (the character ').

Note: To specify a literal single quote, escape it with a backslash (\).
-->
<?php
echo 'this is a simple string';

echo 'You can also have embedded newlines in
strings this way as it is
okay to do';

// Outputs: Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// Outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// Outputs: This will not expand: \n a newline
echo 'This will not expand: \n a newline';

// Outputs: Variables do not $expand $either
echo 'Variables do not $expand $either';
?>
<!--
# Double quoted
If the string is enclosed in double-quotes ("), PHP will interpret the following escape sequences for special characters:
    Escaped characters
Sequence	Meaning
\n	        linefeed
\r	        carriage return
\t	        horizontal tab
\v	        vertical tab
\e	        escape
\f	        form feed
\\	        backslash
\$	        dollar sign
\"	        double-quote

# Simple syntax
If a dollar sign ($) is encountered, the parser will greedily take as many tokens as possible to form a valid variable name. Enclose the variable name in curly braces to explicitly specify the end of the name.
-->
<?php
$juice = "apple";

echo "He drank some $juice juice.".PHP_EOL;
// Invalid. "s" is a valid character for a variable name, but the variable is $juice. 
# Output: He drank some apple juice.

echo "He drank some juice made of $juices.";
// Valid. Explicitly specify the end of the variable name by enclosing it in braces:
# Output: He drank some juice made of .

echo "He drank some juice made of ${juice}s.";
# Output: He drank some juice made of apples.
?>
<!--
# Similarly, an array index or an object property can be parsed. With array indices, the closing square bracket (]) marks the end of the index. The same rules apply to object properties as to simple variables.
-->
<?php
$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice.".PHP_EOL;
# Output: He drank some apple juice.

echo "He drank some $juices[1] juice.".PHP_EOL;
# Output: He drank some orange juice.

echo "He drank some $juices[koolaid1] juice.".PHP_EOL;
# Output: He drank some purple juice.

class people {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";

    public $smith = "Smith";
}

$people = new people();

echo "$people->john drank some $juices[0] juice.".PHP_EOL;
# Output: John Smith drank some apple juice.

echo "$people->john then said hello to $people->jane.".PHP_EOL;
# Output: John Smith then said hello to Jane Smith.

echo "$people->john's wife greeted $people->robert.".PHP_EOL;
# Output: John Smith's wife greeted Robert Paulsen.

echo "$people->robert greeted the two $people->smiths."; // Won't work
# Output: Robert Paulsen greeted the two . 
// (Because there is no property or method for $people->smiths : Not is there a variable $smiths. There is only a variable $people->smith.)
?>
<!--
# Complex (curly) syntax
Note: This isn't called complex because the syntax is complex, but because it allows for the use of complex expressions.

Any scalar variable, array element or object property with a string representation can be included via this syntax. The expression is written the same way as it would appear outside the string, and then wrapped in { and }. Since { can not be escaped, this syntax will only be recognised when the $ immediately follows the {. Use {\$ to get a literal {$. Some examples to make it clear:
-->
<?php
// Show all errors
error_reporting(E_ALL);

$great = 'fantastic';

// Won't work
echo "This is { $great}";
# Outputs: This is { fantastic}

// Works,
echo "This is {$great}";
# Outputs: This is fantastic

// Works
echo "This square is {$square->width}00 centimeters broad.";

// Works, quoted keys only work using the curly brace syntax
echo "This works: {$arr['key']}";

// Works
echo "This works: {$arr[4][3]}";
?>
<!--
# String access and modification by character
-->
<?php
// Get the first character of a string
$str = 'This is a test.';
$first = $str[0];
echo $first;
# Output: T

// Get the third character of a string
$third = $str[2];
echo $third;
# Output: i

// Get the last character of a string.
$str = 'This is still a test.';
$last = $str[strlen($str)-1];
echo $last;
# Output: t

// Modify the last character of a string
$str = 'Look at the sea';
$str[strlen($str)-1] = 'e';
echo $str;
# Output: Look at the see
?>

<?php
# PHP String Data Type - Heredoc & Nowdoc Syntax 9/105

$firstName='Will';
$fullName="$firstName Smith";
echo $firstName. "\n";          //Will
echo $fullName. "\n";           //Will Smith

$name='Will';
$fname="${name} Smith";
echo $name. "\n";               //Will
echo $fname. "\n";              //Will Smith

$_name='Will';
$_fname="{$_name} Smith";
echo $_name. "\n";              //Will
echo $_fname. "\n";             //Will Smith

$finame='Will';
$laname='Smith';
$filaname=$finame.' '.$laname;
echo $filaname."\n";            //Will Smith
echo $filaname[0]."\n";         //W
echo $filaname[1]."\n";         //i
echo $filaname[-1]."\n";        //h
echo $filaname[-2]."\n";        //t

$filaname[1]='I';
$filaname[-3]='I';
echo $filaname."\n";            //WIll SmIth
var_dump($filaname);            //string(10) "WIll SmIth"

$filaname[15]='I';
echo $filaname."\n";     //WIll SmIth     I
var_dump($filaname);     //string(16) "WIll SmIth     I"
echo "\n";

$x=1;
$y=2;

// Heredoc
$text = <<<TEXT
Line 1 $x
Line 2 $y
Line 3 ' "
TEXT;

echo $text;          //echo nl2br($text);
echo "\n";

// Nowdoc
$text = <<<'TEXT'
Line 1 $x
Line 2 $y
Line 3 ' "
TEXT;

echo $text;
echo "\n";

// Heredoc ...
$str = <<<TEXT
<div>
    <p>Hello</p>
    <p>World</p>
</div>
TEXT;

echo $stri;
echo "\n";

// Heredoc ...
$stri = <<<TEXT
Hello World
TEXT;

var_dump($stri);        //string(11) "Hello World"
echo $stri;             //Hello World
echo "\n";

// Heredoc ...
$stri = <<<TEXT
    Hello World
TEXT;

var_dump($stri);        //string(15) "    Hello World"
echo $stri;             //    Hello World
?>