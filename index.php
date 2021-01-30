<?php
    define('DAYS_IN_YEAR', 365);
    $first_name = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" contents="width=device-width, initial-scale=1.0" />
    <title>Intro</title>
    <link rel="stylesheet" href="css/main.css" />
</head>
<body>
    <?php 
        if(!empty($first_name) && !empty($last_name)) {
            echo "<h1>Hello, my name is {$first_name} {$last_name}.</h1>";
        } else {
            echo "Required data has not been submitted. Please submit both a first and last name.<br>";
        }

        echo "Today is " . date("m/d/Y") . ".<br>";

        if(!empty($age)) {
            echo "I am {$age} years old, and ";
            if($age >= 18) {
                echo "I am old enough to vote in the United States.";
            } else {
                echo "I am not old enough to vote in the United States.";
            }
            echo "<br>Fun (or not so fun) fact: {$age} years is ";
            echo DAYS_IN_YEAR * $age;
            echo " days, not including leap days.";
        } else {
            echo "Required data has not been submitted. Please submit an age.";
        }
    
    ?>
</body>
</html>