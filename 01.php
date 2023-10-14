<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body>
<?php
$num1= 14;
$num2= 15;
$num3= 16;

if($num1>$num2&& $num1>$num3){
    echo $num1 . " is the greatest<br>";
}
elseif($num2>$num1&& $num2>$num3){
    echo $num2 . " is the greatest<br>";
}
elseif($num3>$num1&& $num3>$num2){
    echo $num3 . " is the greates<br>";
}
else{
    echo "Something Wrong !!";
}
//smallest

if($num1<$num2&& $num1<$num3){
    echo $num1 . " is the smallest<br>";
}
elseif($num2<$num1&& $num2<$num3){
    echo $num2 . " is the smalles<br>";
}
elseif($num3<$num1&& $num3<$num2){
    echo $num3 . " is the smallest<br>";
}
else{
    echo "Something Wrong !!";
}


    ?>
</body>
</html>