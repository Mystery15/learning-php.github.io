<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $title = "PHP Objects";
        $tag = "<title>$title</title>";
        echo $tag;
    ?>
</head>
<body>
    <?php
        class Product{
            public $description;
            public $price;
            public $inventory;
            public $onsale;

            public function buyProduct($amount)
            {
                $this->inventory -= $amount;
            }
        }
        $product1 = new Product();
                $product1->description = "Baggy Shorts";
                $product1->price = 24.80;
                $product1->inventory = 10;
                $product1->onsale = true;
                echo "<p>Just added $product1->description</p>\n";

                $product2 = new Product();
                $product2->description = "T-shirts";
                $product2->price = 12.70;
                $product2->inventory = 12;
                $product2->onsale = false;
                echo "<p>Just added $product2->description</p>\n";

                echo "<p>Now buying 4 baggy shorts..........</p>\n";
                $product1->buyProduct(4);
                echo "<p>Inventory of $product1->description is now $product1->inventory</p>\n";
                echo "<p>Inventory of $product2->description is still $product2->inventory</p>\n";
    ?>
</body>
</html>