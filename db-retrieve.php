<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || Retrieving from Database</title>
</head>
<body>
    <?php
        $_GET['book'] => 4;
        $_GET['chapter'] => 1;
        $_GET['example'] => 2;

        if(isset($_GET['book'])){
            $book_num = $_GET['book'];
        } else {
            echo 'The "book" parameter is missing! <br>';
            echo 'We are done here, sorry.';
            exit(0);
        }
        if(isset($_GET['chapter'])){
            $chapter_num = $_GET['chapter'];
        } else {
            echo 'The "chapter" parameter is missing! <br>';
            echo 'Sorry it didn\'t work out.';
            exit(0);
        }
        if(isset($_GET['example'])){
            $exapmle_num = $_GET['example'];
        } else {
            echo 'The "example" parameter is missing! <br>';
            echo 'You had <em>one</em> job.';
            exit(0);
        }
    ?>
</body>
</html>