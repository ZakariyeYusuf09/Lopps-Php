<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 4</title>
</head>
<body>
<!-- 5. Write a program that prints numbers divisible by 5 from 1 to 50 using for statement. -->

<?php
for($i=1; $i<=50; $i++){
    if($i % 5 ==0){
       echo  $i . " ";
    }
}
?>

</body>
</html>