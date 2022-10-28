<?php

# Your goal is to create a function that removes the first and last characters of a string.

# You're given one parameter, the original string. You don't have to worry with strings with less than two characters.

function remove_char(string $s): string {
    return substr($s, 1, -1);
}

# Examples
remove_char('eloquent'); // 'loquen'
remove_char('country'); // 'ountr'
remove_char('person'); // 'erso'
remove_char('place'); // 'lac'

?>

<?php
#Explanation:

substr("eloquent", 1, -1); // 'loquen'")

# Important Note: Delete from letter 1 ("l") to letter -1 (the last letter) ("t"). [1 to -1 -> moving to the left]!
?>