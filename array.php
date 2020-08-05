<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $title = "PHP Arrays";
        $tag = "<title>$title</title>";
        echo $tag;
    ?>
</head>
<body>
    
    <!-- /*Working with PHP Arrays */
    The Syntax for declaring an array in PHP is
    
    $array_name[index] = value;
     -->
     <pre>
        <?php
            $city[0] = 'Port Harcourt';
            $city[1] = 'Ikeja';
            $city[2] = 'Abuja';
            echo $city[2], "\n<br>";

            $club = array('Man City', 'Liverpool', 'Chelsea', 'Man Utd', 'Leicester', 'Bournemouth');
            echo $club[4], "\n<br>";
            sort($club);
            print_r($club);

            $name = array('Damien', 'Donald', 'Ronald', 'Famous', 'Kiean', 'Keiran');
            rsort($name);
            print_r($name);

            $state['Rivers'] = 'Port Harcourt';
            $state['Delta'] = 'Asaba';
            $state['Bayelsa'] = 'Yenagoa';
            echo $state['Delta'], "\n<br>";

            $capital = array('Abia' => 'Umuahia', 'Anambra' => 'Awka', 'Ebonyi' => 'Abakiliki', 'Imo' => 'Owerri');
            echo $capital['Imo'], "\n<br>";
            print_r($capital);
        ?>
    </pre>

<!-- The syntax of looping through an array
    foreach($array as $key => $value) {
    Loop statements go here
    }
 -->
    <?php
        $capital = array('Abia' => 'Umuahia', 'Anambra' => 'Awka', 'Ebonyi' => 'Abakiliki', 'Imo' => 'Owerri');
        foreach($capital as $states => $capitals){
            echo "The capital of $states is $capitals.<br>";
        }
    ?>
<!-- The general syntax of a multidimensional array is
arrayName[index] = Array(value1, value2);
 -->
<?php
    $colorArray[0] = array('white', 'black');
    $colorArray[1] = array('grey', 'red');
    $colorArray[2] = array('pink', 'yellow');
    echo $colorArray[1][1];
?>
<!-- Alternatively, you can declare and populate an associative array -->
<?php
    $colorArray['theme1'] = array('background' => 'white', 'foreground' => 'black');
    $colorArray['theme2'] = array('background' => 'grey', 'foreground' => 'red');
    $colorArray['theme3'] = array('background' => 'pink', 'foreground' => 'yellow');
    echo $colorArray['theme3']['foreground'];
?>

</body>
</html>