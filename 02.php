<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
</head>
<body>
    <!--  Write a program that calculates the factorial 
    of a given number (for example, factorial of 5 = 120)
    using for statement. -->
    <?php
    $factorial=5;
    $total=1;
    for($i=1; $i<=$factorial; $i++){
        $total*=$i;
    }
    echo "The foctorial of " .$factorial . " is " .  $total;
    ?>
</body>
</html>