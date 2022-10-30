
<!-- # Convert boolean values to strings 'Yes' or 'No'.

Complete the method that takes a boolean value and return a "Yes" string for true, or a "No" string for false. -->

<?php

function boolToWord($bool) {
    if ($bool == true) {
        return "Yes";
    } else {
        return "No";
    }
    return $bool;
}

echo boolToWord(true);          // Yes
echo boolToWord(false);         // No

?>