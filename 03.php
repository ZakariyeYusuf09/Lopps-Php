<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
</head>
<body>
    <!-- 3. Write a program that prints whether
     the number is even (divisible by 2) or odd using while 
    Statement -->
<?php

$y = 6;

while($y>0){
    if($y%2==0){
        echo $y .  " is even ";
    }
    else{
        echo $y .  " is odd ";
    }
    $y--;
}


?>

</body>
</html>