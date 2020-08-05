<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $title = "PHP Control Statements";
        $tag = "<title>$title</title>";
        echo $tag;
    ?>
</head>
<body>
<!-- The syntax for an IF statement
    if (expression) {
        statements-if-true
     }
 -->
    <?php
        $amount = 50;
        $new_amount = 350;
        if($amount !== 0){
            $increase = 100 * (($new_amount - $amount) / $amount);
        }    
        echo "The percentille increase of $amount is $increase because of the new amount $new_amount";
    ?>
    <!-- The IF.....ELSE syntax
    if (expression) {
        statements-if-true
    } else {
        statements-if-false
    }
     -->
    <?php
        $current_time = gettimeofday();
        if($current_time < 12){
            $greeting = "<br><br>Good Morning!";
        } else {
            $greeting = "<br><br>Good Day!";
        }
        echo $greeting;
    ?>
    <!-- The third syntax for the IF...ELSE statement
    if (expression1) {
        statements-if-expression1-true
    } elseif (expression2) {
            statements-if-expression2-true
    } else {
    statements-if-false
    }
    -->
    <?php
        $currentHour = gettimeofday();
        if($currentHour < 12)
        {
            $greeting = "<br><br>Good morning";
        } 
        elseif ($currentHour < 18) 
        {
            $greeting = "<br><br>Good afternoon";
        }
        else
        {
            $greeting = "<br><br>Good evening";
        }
        echo $greeting;
    ?>
<!-- Using switch()
        switch(expression) {
            case case1:
                case1 statements
                break;
            case case2:
                case2 statements
                break;
            default:
                default statements
        }
 -->
    <?php
        $season = "autumn";
        switch ($season) {
            case 'winter':
                $footwear = "snowshoes";
                break;
            case 'autumn':
                $footwear = "hiking boots";
                break;
            case 'spring':
                $footwear = "galoshes";
                break;
            default:
            $footwear = "flip flops";
                break;
        }
        echo "<br><br>Te footwear we wear for $season is $footwear<br><br>";
    ?>
<!-- PHP while() loop
        while (expression) {
            statements
        }
 -->
 <?php
    $counter = 1;
    while ($counter <= 12) {
        //Generate a random number betwwen 1 and 100
        $random[$counter - 1] = rand(1, 100);
        $counter++;
    }
    print_r($random);
    echo "<br><br>";
 ?>
 <!-- PHP for() loop
    for ($counter = start; expression; $counter++) {
        statements
    }
  -->
  <?php
    for($count = 0; $count <= 12; $count++){
        $random[$count - 1] = rand(1, 100);
    }
    print_r($random);
    echo "<br><br>";
  ?>
  <!-- PHP do....while() loop 
    do {
        statements
    }
    while (expression);
  -->
  <?php
    $count = 0;
    do {
        $random[$count - 1] = rand(1, 100);
        $count ++;
    } 
    while ($count <= 12);
    print_r($random);
    echo "<br><br>";
  ?>

</body>
</html>