<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP || Basics</title>
</head>
<body>
    <!-- /*Working with PHP Basics */ -->
    <?php
        $intro = "<h1>Hello World!!! </h1>";
        $str1 = "<h2>Learning ";
        $str2 = "Concatenation!!!</h2>";
        echo $intro;
        echo $str1 . $str2;
        echo $intro, $str1, $str2;
    ?>
    <?php
        $str1 = "<div>What does PHP stand for?</div>";
        $str2 = "<div>It's a <i>recursive acronym</i>:</div>";
        $str3 = "<div>PHP: Hypertext Preprocessor</div>";
        echo $str1, $str2, $str3;

        $tag1 = '<a href="">Word Say</a><br>';
        $tag2 = '<a href="">\nWord Say\n</a><br>';
        $tag3 = "<a href=\"\">\nWord Say\n</a><br>";
        echo $tag1, $tag2, $tag3;
    ?>
    <?php
        $str1 = "<div>What does PHP stand for?</div><div>It's a <i>recursive acronym</i>:</div><div>PHP: Hypertext Preprocessor</div>";
        echo $str1;
    ?>
    <?php
        $author = "Rasmus Lerdorf";
        $str = <<<LONG_SENTENCE
        <blockquote>
        In the end, what I think set PHP apart in the early days, and still does today, is that it always tries to find the shortest path to solving the Web problem. It does not try to be a general-purpose scripting language and anybody who's looking to solve a Web problem will usually find a very direct solution through PHP. Many of the alternatives that claim to solve the Web problem are just too complex. When you need something up and working by Friday so you don't have to spend all weekend leafing through 800-page manuals, PHP starts to look pretty good. &mdash; $author
        </blockquote>
        LONG_SENTENCE;
        echo $str;
    ?>

    <?php
        $content = $_GET['content'];
        echo "You are in the $content session";
    ?>
</body>
</html>