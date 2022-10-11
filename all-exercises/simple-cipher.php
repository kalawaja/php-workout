
<?php

# Simple Cipher

function encode(string $text, int $shift): string
{
    $text = strtolower($text);
    $result = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (ctype_alpha($char)) {
            $char = chr(ord($char) + $shift);
            if (!ctype_alpha($char)) {
                $char = chr(ord($char) - 26);
            }
        }
        $result .= $char;
    }
    return $result;
}

function decode(string $text, int $shift): string
{
    return encode($text, -$shift);
}

$encoded = encode('Hello, World!', 5);

echo $encoded . PHP_EOL;

echo decode($encoded, 5) . PHP_EOL;

?>