<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debugging PHP</title>
</head>
<body>
    <!-- <?php
        phpinfo();
    ?> -->

    <?php
        for($i = 0; $i < 12; $i++)
        {
            $random[$i] = rand(1, 100);
            echo $random[$i] . '<br>';
            echo "Made it to Line #" . __LINE__ . '<br>';
            print_r($random);
            echo " " . '<br>';
        }
    ?>

<?php
        for($i = 0; $i < 12; $i++)
        {
            $random[$i] = rand(1, 100);
        }
        var_dump($random);
    ?>
</body>
</html>