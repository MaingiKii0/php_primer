<?php 
    $title = "While Loop";
    include 'includes/header.php' 
    ?>
    <h1>While Loop</h1>
    <?php
        $grade = 0;
        // //Infinite Loop
        // while ($grade < 10) {
        //     echo '<p>I AM LESS THAN 10</p>';
        // }
        //pre-condition Loop
        while ($grade < 10) {
            echo '<p>I AM LESS THAN 10</p>';
            $grade++;
        }
        echo 'EXIT LOOP!';
    ?>

    <h1>Do-While Loop</h1>
    <?php
        //Post-Condition\
        $grade = 0;
        do {
            echo '<p>I AM LESS THAN 10</p>';
            $grade++;
        } while ($grade < 10);
        echo 'EXIT LOOP!';
    ?>
    
    <?php include 'includes/footer.php' ?>