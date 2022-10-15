
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

# Double quoted
If the string is enclosed in double-quotes ("), PHP will interpret the following escape sequences for special characters:
    <strong>Escaped characters</strong>
<em>Sequence</em>	<em>Meaning</em>
\n	                linefeed
\r	                carriage return
\t	                horizontal tab
\v	                vertical tab
\e	                escape
\f	                form feed
\\	                backslash
\$	                dollar sign
\"	                double-quote