
<!-- 
# The Feast of Many Beasts

# All of the animals are having a feast! Each animal is bringing one dish. There is just one rule: the dish must start and end with the same letters as the animal's name. For example, the (g)reat blue hero[n] is bringing (g)arlic naa[n] and the (c)hickade[e] is bringing (c)hocolate cak[e].

# Write a function "feast" that takes the animal's name and dish as arguments and returns true or false to indicate whether the beast is allowed to bring the dish to the feast.

# Assume that "beast" and "dish" are always lowercase strings, and that each has at least two letters. "beast" and "dish" may contain hyphens and spaces, but these will not appear at the beginning or end of the string. They will not contain numerals. 
-->

<html>
    <head>
        <style>
            body {
                font-family: sans-serif;
                margin: 10%;
                padding: 0;
                text-align: center;
            }
            h1 {
                color: cadetblue;
            }
            h3 {
                color: #888;
            }
            h4 {
                color: rebeccapurple;
            }
            h5 {
                color: maroon;
            }
            p {
                color: navy;
            }
        </style>
    </head>
    <body>
        <h1>The Feast of Many Beasts</h1>
        <h3>This app is a function "feast" that takes the animal's name and dish as arguments and returns true or false to indicate whether the beast is allowed to bring the dish to the feast.</h3>
        <h4>Note: "beast" and "dish" may contain hyphens and spaces, but these will not appear at the beginning or end of the string.</h4>
        <h5><strong>Examples:</strong> <br><br>
        <strong>Animal:</strong> "great blue heron" <strong>Dish:</strong> "garlic naan"</code> <strong>//Result: </strong> True </code>.
        <br><br>
        <strong>Animal:</strong> "chickadee" <strong>Dish:</strong> "chocolate cake"</code> <strong>//Result: </strong> True </code>.
        <br><br>
        <strong>Animal:</strong> "brown bear" <strong>Dish:</strong> "bear claw"</code> <strong>//Result: </strong> False </code>.</h5>
        <form action="animals-dishes.php" method="post">
            <label for="animal">Animal:</label>
            <input type="text" name="animal" id="animal">
            <label for="dish">Dish:</label>
            <input type="text" name="dish" id="dish">
            <input type="submit" value="Submit">
        </form>
        <?php
        // if has an input submit
        if (isset($_POST['animal']) && isset($_POST['dish'])) {
            $animal = $_POST['animal'];
            $dish = $_POST['dish'];
            // function feast
            function feast($animal, $dish)
            {
                // if first letter of animal is equal to first letter of dish
                // and last letter of animal is equal to last letter of dish
                if ($animal[0] == $dish[0] && $animal[strlen($animal) - 1] == $dish[strlen($dish) - 1]) {
                    return true;
                } else {
                    return false;
                }
            }
            // call function
            $result = feast($animal, $dish);
            // if result is true
            if ($result) {
                echo "<p><strong>$animal</strong> is bringing <strong>$dish</strong>. <br>
                <strong>True!</strong> 🎉</p>";
            } else {
                echo "<p><strong>$animal</strong> is not bringing <strong>$dish</strong>. <br>
                <strong>False!</strong> 😢</p>";
            }
        }
        ?>
    </body>
</html>