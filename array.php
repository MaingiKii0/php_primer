<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php' 
    ?>
    <h1>Arrays and Printouts</h1>
    <?php
        //a variable
        $num = 3;

        // an array
        //Only one datatype-homogenous array
        $numbers = array(1,2,3,4,5,6,7,8,9,10);

        echo $numbers[5];
        
        $size = count($numbers);
        echo "<p>Array Numbers size is: $size</p>";

        for ($count=0; $count < $size; $count++) { 
            echo "<p>$numbers[$count]</p>";
        }
    ?>
    
    <?php include 'includes/footer.php' ?>