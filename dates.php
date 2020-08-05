<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || Dates</title>
</head>
<body>
    <?php
        $today = date("l, F jS, Y");
        echo $today . "<br><br>";
        echo date("d/m/Y") . "<br><br>";

        $timestamp = strtotime("29/07/2020");
        $holiday = date("l", $timestamp);
        echo $holiday . "<br><br>";

        $start = strtotime("07/04/2020 10:00:00");
        $end = $start + (60 * 10);
        $duedate = date("H:i:s", $end);
        echo $duedate . "<br><br>";
    ?>
</body>
</html>