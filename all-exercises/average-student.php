<?php

# There was a test in your class and you passed it. Congratulations!

# But you're an ambitious person. You want to know if you're better than the average student in your class.

# You receive an array with your peers' test scores. Now calculate the average and compare your score!

# Return True if you're better, else False!

/* 
Note:
Your points are not included in the array of your class's points. For calculating the average point you may add your point to the given array!
*/
?>

<html>
  <head>
    <style>
      body {
        font-family: monospace;
        font-size: 1.2em;
        margin: 10% auto;
        padding: 10% auto;
        align-items: center;
        justify-content: center;
        text-align: center;
      }
      label {
        display: inline-block;
        margin-bottom: 10px;
        font-size: 1.2em;
        font-weight: bold;
      }
      input {
        display: block;
        margin: 0 auto;
        margin-bottom: 10px;
        padding: 10px;
        font-size: 1.2em;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: monospace;
      }
      h1 { color: black; }
      h2 { color: maroon; }
      h3 { color: tan; }
      h4 { color: cadetblue; }
      h5 { color: orangered; }
      .p1 { color: green; }
      .p2 { color: palevioletred; }
    </style>
  </head>
  <body>
    <h1>Average Student</h1>
    <h2>There was a test in your class and you passed. 
    <br>  
    Congratulations!</h2>
    <h3>But you are an ambitious person. You might want to know if you are better than the average student in your class.</h3>
    <h4>We have an array of test scores for your class.
    <br> 
    We have also calculated your class average.</h4>
    <h4>Enter your score and compare it to the class average!</h4>
    <h5>Note: Return True if you are better and False if you are not!</h5>
    <form action="average-student.php" method="post">
      <label for="points">Enter your points:</label>
      <input type="text" name="points" id="points">
      <input type="submit" value="Submit">
    </form>
    <?php
    // if has an input submit
    if (isset($_POST['points'])) {
      $points = $_POST['points'];
      // array of points
      $pointsArray = [70, 80, 55, 40, 95];
      // add points to array
      array_push($pointsArray, $points);
      // calculate average
      $average = array_sum($pointsArray) / count($pointsArray);
      // if points are greater than average
      if ($points > $average) {
        echo "<p class='p1'>" . 
        "Class average: <strong>$average</strong>. <br>
        You are better than the average student. <br>
        <strong>Congratulations!</strong> 👍" . 
        "</p>";
      } else {
        echo "<p class='p2'>" . 
        "Class average: <strong>$average</strong>. <br>
        You are not better than the average student. <br>
        <strong>Never give up!</strong> 👊" . 
        "</p>";
      }
    }
    ?>
  </body>
</html>

<?php
/*
# average-student with pure PHP

$pointsArray = [70, 80, 55, 40, 95];
array_push($pointsArray, 60);
$average = array_sum($pointsArray) / count($pointsArray);
if (60 > $average) {
  echo "Class average: $average. <br>
        You are better than the average student. <br>
        Congratulations! 👍";
} else {
  echo "Class average: $average. <br>
        You are not better than the average student. <br>
        Never give up! 👊";
}
*/
?>
