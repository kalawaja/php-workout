<?php

# Simple multiplication

# Multiply a given number by eight if it is an even number, otherwise by nine.

?>

<html>
    <body>
        <form action="eight-nine-multiplication.php" method="post">
            <input type="text" name="number">
            <input type="submit" value="Submit">
        </form>
        <?php
        // if has an input submit
        if (isset($_POST['number'])) {
            $number = $_POST['number'];
            // if number is even
            if ($number % 2 == 0) {
                echo "$number x 8 = " . $number * 8;
            } else {
                echo "$number x 9 = " . $number * 9;
            }
        }
        ?>
    </body>
</html>