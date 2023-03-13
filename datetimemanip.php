<?php 
    $title = "Date and Time Manipulations";
    include 'includes/header.php' 
    ?>
    <h1>Date and Time Manipulations</h1>

    <?php
        $datenow = getdate();
        echo "Today's Date: <br/>";
        echo $datenow['mday']. '<br/>';
        echo $datenow['mon']. '<br/>';
        echo $datenow['year']. '<br/>';

        echo "Today's Date: ".$datenow['mday']. '/' .$datenow['mon']. '/' .$datenow['year']; 
    ?>
    
    <?php include 'includes/footer.php' ?>