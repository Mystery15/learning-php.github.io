<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $title = "PHP Functions";
        $tag = "<title>$title</title>";
        echo $tag;
    ?>
</head>
<body>
    <!-- The basic syntax of a function looks like 
        function function_name(arguments) {
            statements
        }
    -->
    <?php
        function displayHeader()
        {
            echo "<header>\n";
            echo "<img src=\"img/pic.jpg\" alt=\"My little logo\">\n";
            echo "<h1>Testing out PHP Functions</h1>";
            echo "<h3>Learning PHP from Scratch (for good reason!)</h3>\n";
            echo "</header>";
        }
        displayHeader();
    ?>

    <!-- Passing argument to a function -->
    <?php
        function display_header($img)
        {
            echo "<header>\n";
            echo "<img src=\"img/$img\" alt=\"My little logo\">\n";
            echo "<h1>Testing out PHP Functions</h1>";
            echo "<h3>Learning PHP from Scratch (for good reason!)</h3>\n";
            echo "</header>";
        }
        display_header('pic.jpg');
    ?>

    <!-- Returning a value from a function -->
    <?php
        $tipTotal = 100.00;
        $percentage = 0.15;

        function calculate_tip($tip, $percent)
        {
            $result = $tip * $percent;
            return $result;
        }
        $cost = calculate_tip($tipTotal, $percentage);
        $bill = $tipTotal + $cost;
        echo "Your bill is \n$bill";
    ?>
</body>
</html>