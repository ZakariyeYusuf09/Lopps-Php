<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 9</title>
</head>
<body>
    <!--9. Write a program that prints whether the number is a prime
    (whole number greater than 1 which is 
    exactly divisible by itself and 1 but no other number) or
    non-prime using for statement. -->
<?php

$number = 12;

$prime = true;

if ($number <= 1) {
    $prime = false;
} else {
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $prime = false;
            break;
        }
    }
}

if ($prime) {
    echo "$number is a prime number.\n";
} else {
    echo "$number is not a prime number.\n";
}
?>

</body>
</html>