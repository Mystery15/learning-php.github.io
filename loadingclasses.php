<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loading Classes</title>
</head>
<body>
    <h1>PHP || Loading Classes</h1>
    <?php
        spl_autoload_register(function($class) {
            include $class . ".inc.php";
        });

        $prod1 = new Product("Carrots", 4.00, 10, false);
        echo "<p>Creating one product:</p>\n";
        echo $prod1;

        $prod2 = new Product("Eggplant", 2.00, 5, true);
        echo "<p>Creating one product:</p>\n";
        echo $prod2;

        echo "<p>Putting $prod1->description on sale:</p>\n";
        $prod1->price = 3.00;
        $prod1->putonsale();
        echo "<p>New product status:</p>\n";
        echo $prod1;
    ?>
</body>
</html>