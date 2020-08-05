<?php
    if (!isset($_COOKIE['test1'])) {
        setcookie("test1", "This is a test cookie", time() + 600);
    } else {
        setcookie("test1", "", time() - 1);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || Deleting Cookies</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['test1'])) {
            $data = $_COOKIE['test1'];
            echo "<p>Cookie set: $data<p>\n";
        } else {
            echo "<p>Cookie not set</p>\n";
        }
    ?>
    <a href="removingcookies.php">Click to try again</a>
</body>
</html>