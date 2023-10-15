<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 7</title>
</head>
<body>
<!--7. Write a program to find common factors of two positive integer numbers (for example, common 
factors of 42 and 70 are: 2, 7 and 14) using while statement. -->
<?php
$number1 = 42;
$number2= 70;
while($number1 <=42 && $number2<=70){
    for($i=1; $i<=70; $i++){
        if($number1 % $i == 0 && $number2 % $i ==0){
            echo $i . " ";
        }
    }
    $number1++;
    $number2++;
}
?>

</body>
</html>