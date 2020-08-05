<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Test</title>
</head>
<body>
    <?php
        // $fname = htmlspecialchars($_POST['fname']);
        $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
        echo "<p>Welcome, $fname</p>\n";
    ?>
    <h2>This is the end of the test</h2>
</body>
</html>