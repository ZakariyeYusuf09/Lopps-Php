<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
</head>
<body>
    <!-- 6. Write a program to find all factors of a positive
    integer number (for example, factors of 42 are: 1, 
    2, 3, 6, 7, 14, 21 and 42) using do…while statement. -->
<?php
$number = 42;
while($number <=42){
    for($i=1; $i<=$number; $i++){
        if($number % $i == 0){
            echo $i . " ";
        }
    }
    $number++;
}
?>

</body>
</html>