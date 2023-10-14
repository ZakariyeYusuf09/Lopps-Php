<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
</head>
<body>
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