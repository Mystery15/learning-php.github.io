<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type Test</title>
    <style>
        .warning{
            color: red;
    }
    </style>
</head>
<body>
    <h1>Form Results: </h1>
    <?php
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $age = htmlspecialchars($_POST['age']);

        echo "<p>Name: $name</p>\n";
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email: $email</p>\n";
        } else {
            echo "<p class='warning'>Please enter a valid email address</p>\n";
        }
        if(is_numeric($age)){
            echo "<p>Age: $age</p>\n";
        } else{
            echo "<p class='warning'>Please enter a valid age!!!!!!!!!</p>";
        }
    ?>
    <br>
    <a href="datatypetest.html">Return to form</a>
</body>
</html>