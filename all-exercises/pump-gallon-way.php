
<!--
# Will you make it?

# You were camping with your friends far away from home, but when it's time to go back, you realize that your fuel is running out and the nearest pump is "50" miles away! You know that on average, your car runs on about "25" miles per gallon. There are "2" gallons left.

# Considering these factors, write a function that tells you if it is possible to get to the pump or not.

# Function should return "true" if it is possible and "false" if not.
-->

<html>
    <head>
        <title>Will you make it?</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                background-color: #eee;
                width: 100%;
                height: 100%;
                font-family: sans-serif;
                font-size: 1em;
                color: #333;
            }
            form {
                margin: 0 auto;
                padding: 0;
                width: 50%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            input {
                min-width: 60%;
                max-width: 50%;
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            p {
                max-width: 30%;
                min-width: 30%;
                margin: 0 auto;
                padding: 0;
                min-height: 5%;
                border: 1px solid #ccc;
                border-radius: 4px;
                color: #777;
                text-align: center;
                justify-content: center;
                align-items: center;
                display: flex;
            }
            #p1 {
                background-color: lightblue;
                color: white;
                border: none;
            }
            #p2 {
                background-color: lightcoral;
                color: #333;
                border: none;
            }
            #send {
                background-color: #ddd;
                color: #333;
                border: 1px solid #333;
                font-size: medium;
                cursor: pointer;
            }
            .paragraph {
                margin: 0 auto;
                padding: 10px;
                width: 90%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
            }
            #lab {
                padding-top: 20px;
            }
        </style>
    </head>
    <body>
        <h3 class="paragraph">Will you Make it?</h3>
        <h4 class="paragraph">You've been camping with friends far away from home, but when it's time to come back you realize you're out of fuel and the nearest pump is "50" miles away! You know that your car runs at an average of "25" miles per gallon. There are "2" gallons left.</h4>
        <h4 class="paragraph">You have an app that tells you if it is possible to reach the pump.</h4>
        <h4 class="paragraph">Just enter the information requested from you.</h4>
        <form action="pump-gallon-way.php" method="post">
            <label for="distance" id="lab">Enter the distance to the pump</label>
            <br>
            <input type="text" name="distance" required>
            <br>
            <label for="miles-per-gallon">Enter the miles per gallon</label>
            <br>
            <input type="text" name="mpg" required>
            <br>
            <label for="fuel-left">Enter the fuel left in the tank</label>
            <br>
            <input type="text" name="fuelLeft" required>
            <br>
            <input type="submit" value="Submit" id="send">
        </form>
        <?php
        // if has an input submit
        if (isset($_POST['distance']) && isset($_POST['mpg']) && isset($_POST['fuelLeft'])) {
            $distance = $_POST['distance'];
            $mpg = $_POST['mpg'];
            $fuelLeft = $_POST['fuelLeft'];
            // if number is even
            if ($distance <= $mpg * $fuelLeft) {
                echo "<p id='p1'>" .
                "You can make it!" . 
                "</p>";
            } else {
                echo "<p id='p2'>" .
                "You can't make it!"
                . "</p>";
            }
        }
        ?>
    </body>
    </head>
</html>


<?php
/*
# Solution with pure PHP

function pumpGallonWay($distanceToPump, $milePerGallon, $gallon) {
  if ($distanceToPump <= $milePerGallon * $gallon) {
    return true;
  } else {
    return false;
  }
}

// TEST CASES
echo pumpGallonWay(50, 25, 2) . "<br>"; // true
echo pumpGallonWay(100, 50, 1) . "<br>"; // false
*/
?>


