<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 10</title>
</head>
<body>
    <!-- Write a program that prints
     non-prime numbers from 90 to 12 using while and do… statement. -->
<?php
// while
$num = 90;
echo "Non-prime numbers from 90 to 12 (using while loop): <br><br>";


while ($num >= 12) {
    $isPrime = true;
    
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    
    if (!$isPrime) {
        echo "$num ";
    }
    
    $num--;
}

//  do while
$num = 90;

echo "<br><br>Non-prime numbers from 90 to 12 (using do...while loop):<br><br>";

do {
    $isPrime = true;
    
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    
    if (!$isPrime) {
        echo "$num ";
    }
    
    $num--;
} while ($num >= 12);

?>

    
</body>
</html>