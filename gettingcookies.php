<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || Deleting Cookies</title>
</head>
<body>
    <h1>Retrieving a cookie</h1>
    <?php
        if(isset($_COOKIE['test1'])) {
            $data = $_COOKIE['test1'];
            echo "<p>The cookie was set: $data</p>\n";
        } else {
            echo "<p>Sorry, I couldn't find the cookie</p>\n";
        }
    ?>
</body>
</html>