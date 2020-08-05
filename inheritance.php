<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || Extending Classes</title>
</head>
<body>
    <h1>PHP || Testing Inheritance</h1>
    <?php
        spl_autoload_register(function($class) {
            include $class . ".inc.php";
        });
        $prod1 = new Soda("Root Beer", 1.25, 10, false, 18);
        echo $prod1;

        echo "<p>Buying 6 bottles:</p>\n";
        $prod1->buyProduct(6);
        echo $prod1;
        
        echo "<p>Restocking 4 bottles:</p>\n";
        $prod1->restock(4);
        echo $prod1;
    ?>
</body>
</html>