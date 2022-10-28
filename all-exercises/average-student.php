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
  <body>
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
        echo "Class average: <strong>$average</strong>. <br>
        You are better than the average student. <br>
        <strong>Congratulations!</strong> 👍";
      } else {
        echo "Class average: <strong>$average</strong>. <br>
        You are not better than the average student. <br>
        <strong>Never give up!</strong> 👊";
      }
    }
    ?>
  </body>
</html>