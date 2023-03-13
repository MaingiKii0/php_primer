<?php 
    $title = "Home";
    include 'includes/header.php' 
    ?>
    <!--Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>

    <?php
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second line';
        echo '<br/>';
    
        //declare variables
        $name='Maingi Kiio';
        $age=34;
        //echo variables
        echo $name;
        echo '<h1>My name is:'.$name.' </h1>';
        echo '<h1>My age is:'.$age.' </h1>';
    ?>
    <button type="button" class="btn btn-dark">CLICK ME</button>
    <?php include 'includes/footer.php' ?>