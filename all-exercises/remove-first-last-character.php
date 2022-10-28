
<!-- 
# Remove first and last character from a string

# Your goal is to create a function that removes the first and last characters of a string.

# You're given one parameter, the original string. You don't have to worry with strings with less than two characters. 
-->

<html>
    <head>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 1em;
                line-height: 2em;
                margin: 5% 20%;
                padding: 5% auto;
                background-color: #f5f5f5;
                min-width: 70%;
                text-align: center;
            }
            h1 { color: midnightblue; }
            h2 { color: tan; }
            h3 { color: teal; }
            h4 {
                color: teal;
                font-size: 1em;
                font-weight: normal;

             }
            label { 
                color: navy;
                font-size: 1.2em;
                font-weight: bold;
            }
            ::placeholder {
                text-align: center;
            }
            input {
                padding: 5px;
                border: 3px solid navy;
                color: navy;
                font-size: 1.2em;
                border-radius: 5px;
                margin: 5px;
                height: 10%;
                width: 70%;
            }
            .p1 {
                color: olivedrab;
                text-align: left;
                width: 70%;
                margin: 0 auto;
                padding: 0 auto;
                text-align: center;
            }
            .p2 {
                color: darkorange;
                text-align: left;
                width: 70%;
                margin: 0 auto;
                padding: 0 auto;
                text-align: center;
            }
            span {
                color: navy;
                font-weight: bold;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>This app Removes the First and Last Character</h1>
        <h2>Type a text to remove the first and last characters of a string.</h2>
        <h3>You can leave a space. <br>
        You also don't have to worry about strings of two characters or less.</h3>
        <form action="remove-first-last-character.php" method="post">
            <label for="string">Enter a string:</label>
            <br>
            <input type="text" name="string" id="string" placeholder="// Removes the...">
            <br>
            <input type="submit" value="Submit">
        </form>
        <?php
            function remove_char($s) {
                $s = substr($s, 1, -1);
                return $s;
            }
            if (isset($_POST['string'])) {
                $string = $_POST['string'];
                echo "<p class='p1'><span>Your string is:</span> " . "<br>" . $string . "</p>";
                echo "<p class='p2'><span>Your string without the first and last character is:</span> " . "<br>" . remove_char($string) . "</p>";
            }
        ?>
    </body>
</html>

<!-- 
Important Note: Delete from letter 1 ("l") to letter -1 (the last letter) ("t"). [1 to -1 -> moving to the left]! 
-->