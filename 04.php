<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
</head>
<body>
<!-- 4. Write a program that prints odd numbers from 2 to 20 using do…while statement. -->

<?php
$number=2;
do{
    
    if($number % 2 != 0){
        echo $number . " ";
    }
    $number++;
   
}while($number<=20);
?>

</body>
</html>