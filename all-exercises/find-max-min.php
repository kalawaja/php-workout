
<!-- 
# Find Maximum and Minimum Values of a List

# Your task is to make two functions ( max and min, or maximum and minimum, etc., depending on the language ) that receive a list of integers as input, and return the largest and lowest number in that list, respectively.

/*
############### Examples (Input -> Output)
[4,6,2,1,9,63,-134,566]         -> max = 566, min = -134
[-52, 56, 30, 29, -54, 0, -110] -> min = -110, max = 56
[42, 54, 65, 87, 0]             -> min = 0, max = 87
[5]                             -> min = 5, max = 5
*/

# Notes
// You may consider that there will not be any empty arrays/vectors. 
-->

<html>
    <head>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 1em;
                margin: 5%;
                padding: 5%;
            }
            label {
                font-size: 1.2em;
                display: block;
            }
            input {
                width: 100%;
                height: 50px;
                font-size: 1.5em;
                padding: 10px;
                margin: 10px 0;
            }
        </style>
    </head>
    <body>
        <!-- Print the largest number and the smallest number among 5 inputs.  -->
        <form action="" method="post">
            <label for="num1">1<sup>st</sup></label>
            <input type="number" name="num1" id="num1" placeholder="Enter a number" required>
            <label for="num2">2<sup>nd</sup></label>
            <input type="number" name="num2" id="num2" placeholder="Enter a number" required>
            <label for="num3">3<sup>rd</sup></label>
            <input type="number" name="num3" id="num3" placeholder="Enter a number" required>
            <label for="num4">4<sup>rd</sup></label>
            <input type="number" name="num4" id="num4" placeholder="Enter a number" required>
            <label for="num5">5<sup>rd</sup></label>
            <input type="number" name="num5" id="num5" placeholder="Enter a number" required>
            <input type="submit" value="Submit">
        </form>
        <?php
            if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3']) && isset($_POST['num4']) && isset($_POST['num5'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $num4 = $_POST['num4'];
                $num5 = $_POST['num5'];
                $numbers = array($num1, $num2, $num3, $num4, $num5);
                $max = max($numbers);
                $min = min($numbers);
                echo "The largest number is $max and the smallest number is $min.";
            }
        ?>
    </body>
</html>

<?php
/*
function maximum ($array) {
    return max($array);
}

function minimum ($array) {
    return min($array);
}

// Test
echo maximum([4,6,2,1,9,63,-134,566]) . "";
echo minimum([-52, 56, 30, 29, -54, 0, -110]) . "";
echo maximum([42, 54, 65, 87, 0]) . "";
echo minimum([5]) . "";
*/
?>