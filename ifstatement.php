<?php 
    $title = "If Else Statement";
    include 'includes/header.php' 
    ?>
<h1>If Else Statement</h1>
    <?php

    //If statement that carries out an action based on the variable

    echo '<h2>If Statement</h2>';

    $grade = 60;
    // ===, ==. >, <, >=, <=
    if ($grade >= 50) {
        # code...
        echo '<h3 style="color: green" >YOU HAVE PASSED</h3>';
    }
    else {
        echo '<h3 style="color: red" >YOU HAVE FAILED</h3>';
    }
    $grade = 'B';
    // If-Else  If-Else
    if ($grade == 'A') {
        echo '<h2 style="color: green">YOU ARE A SUPERSTAR</h2>';
    }
    elseif ($grade == 'B') {
        echo '<h2 style="color: blue">YOU DID WELL</h2>';
    }
    else {
        echo '<h2 style="color: red">YOU HAVE FAILED</h2>';
    }
    ?>
<?php include 'includes/footer.php' ?>