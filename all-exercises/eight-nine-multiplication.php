<?php

# Simple multiplication

# Multiply a given number by eight if it is an even number, otherwise by nine.

?>

<html>
    <head>
        <style>
            body {
                font-family: sans-serif;
                margin: 10% auto;
                padding: 10% auto;
                align-items: center;
                justify-content: center;
                text-align: center;
            }
            input {
                min-width: 50%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            h3 {
                color: #777;
            }
            p {
                margin: auto;
                padding: 5%;
                max-width: 50%;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                color: #777;
                min-height: 10%;
            }
            ::placeholder {
                color: #888;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Simple Multiplication</h1>
        <h3>
        This application multiplies the number you enter by eight if it is an even number and by nine if it is not.
        </h3>
        <form action="eight-nine-multiplication.php" method="post">
            <input type="text" name="number" placeholder="Enter a number!" required>
            <br>
            <input type="submit" value="Submit">
        </form>
        <?php
        // if has an input submit
        if (isset($_POST['number'])) {
            $number = $_POST['number'];
            // if number is even
            if ($number % 2 == 0) {
                echo "<p>" .
                "$number x 8 = " . $number * 8 . 
                "</p>";
            } else {
                echo "<p>" .
                "$number x 9 = " . $number * 9
                . "</p>";
            }
        }
        ?>
    </body>
</html>