<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Session Cookies</title>
</head>
<body>
    <h1>Retrieving the session cookie</h1>
    <?php
        if (isset($_SESSION['test2'])) {
            $data = $_SESSION['test2'];
            echo "<p>Session cookie: $data</p>\n";
        } else {
            echo "<p>Error accessing the session
            cookie</p>\n";
        }
    ?>
    <a href="sessiontest1.php">Go back to start</a>
</body>
</html>