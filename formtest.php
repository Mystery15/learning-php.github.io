<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || Form Test</title>
</head>
<body>
    <h1>Form Results: </h1>
    <?php
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        if(isset($_POST['sport'])){
            $sport = $_POST['sport'];
        } else {
            $sport = "Not Specified";
        }
        $essay = $_POST['essay'];

        echo "<h2>First name: $fname</h2>\n";
        echo "<h2>Last name: $lname</h2>\n";
        echo "<h2>Favorite sport: $sport</h2>\n";
        echo "<h2>Essay response:</h2>\n";
        echo "<p>$essay</p>\n";
    ?>
</body>
</html>