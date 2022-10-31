

<html>
<head>
<title>Vector Calculate</title>

</head>
<body>
    <form action="vector.php" method="post">
        <table>
            <tr>
                <td>Vector 1</td>
                <td><input type="text" name="vector1" /></td>
            </tr>
            <tr>
                <td>Vector 2</td>
                <td><input type="text" name="vector2" /></td>
            </tr>
            <tr>
                <td>Operation</td>
                <td>
                    <select name="operation">
                        <option value="add">Add</option>
                        <option value="subtract">Subtract</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Calculate" /></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['vector1']) && isset($_POST['vector2'])) {
        $vector1 = $_POST['vector1'];
        $vector2 = $_POST['vector2'];
        $operation = $_POST['operation'];

        $vector1 = explode(',', $vector1);
        $vector2 = explode(',', $vector2);

        $vector1 = array_map('trim', $vector1);
        $vector2 = array_map('trim', $vector2);

        $vector1 = array_map('floatval', $vector1);
        $vector2 = array_map('floatval', $vector2);

        $result = null;

        switch ($operation) {
            case 'add':
                $result = add($vector1, $vector2);
                break;
            case 'subtract':
                $result = subtract($vector1, $vector2);
                break;
        }

        echo '<p>Result: ' . implode(', ', $result) . '</p>';
    }

    function add($vector1, $vector2)
    {
        $result = [];

        for ($i = 0; $i < count($vector1); $i++) {
            $result[] = $vector1[$i] + $vector2[$i];
        }

        return $result;
    }

    function subtract($vector1, $vector2)
    {
        $result = [];

        for ($i = 0; $i < count($vector1); $i++) {
            $result[] = $vector1[$i] - $vector2[$i];
        }

        return $result;
    }
    # Draw a number line according to the result

    function drawNumberLine($result)
    {
        $result = implode(', ', $result);
        $result = explode(',', $result);
        $result = array_map('trim', $result);
        $result = array_map('floatval', $result);

        $result = array_sum($result);

        if ($result > 0) {
            for ($i = 0; $i < $result; $i++) {
                echo ' - ';
            }
            echo ' 0 ';
            for ($i = 0; $i < $result; $i++) {
                echo ' + ';
            }
        } else {
            for ($i = 0; $i < $result; $i++) {
                echo ' + ';
            }
            echo ' 0 ';
            for ($i = 0; $i < $result; $i++) {
                echo ' - ';
            }
        }
    }
    ?>
    <html>
    <head>
    <title>Number Line</title>
    </head>
    <body>
    <p>Number Line</p>
    <?php
    drawNumberLine($result);
    ?>
    </body>
    </html>
</body>
</html>




