<?php 
    $title = "String Manipulation";
    include 'includes/header.php' 
    ?>

    <h1>PHP String Manipulation</h1>
    <?php
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "maingi kiio";
        echo $phrase1. ", named Tiffany, " .$phrase2;
        echo '<br/>';
        echo '<hr/>';
        //string transformation
        echo 'Uppercase first letter: '. ucfirst($name). '<br/>';
        echo 'Uppercase first letter of each word: '. ucwords($name). '<br/>';
        echo 'Upper case: '.strtoupper($name).'<br/>';
        echo 'Lower case: '.strtolower("THIS WAS ALL AN UPPER CASE"). '<br/>';
        echo '<hr/>';
        echo 'Repeat string: '.str_repeat('a', 10). '<br/>';
        echo 'Repeat string: '.strtoupper(str_repeat('a', 10)). '<br/>';
        echo 'Get a Substring: ' .substr($name, 3, 5). '<br/>';

        echo 'Get position of string: ' .strpos($name, 'k'). '<br/>';

        echo 'Find character: ' .strpos($name, 'k'). '<br/>';
        echo 'Replace string: ' .str_replace('maingi', 'Stanley',$name). '<br/>';
    ?>
<?php include 'includes/footer.php' ?>