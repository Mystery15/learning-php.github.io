<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || String Parsing Test Results</title>
</head>
<body>
    <h1>Search word results</h1>
    <?php
        $search = $_POST['search'];
        $words = str_getcsv($search);
        foreach ($words as $word) {
            $term = trim($word);
            echo "<p>Search term: '$term'</p>
            \n";
        }
    ?>
</body>
</html>