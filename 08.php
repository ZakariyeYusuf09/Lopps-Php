<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 8</title>
</head>
<body>
    <!-- 8. Write a program that calculates lowest common
     multiplier (LCM) of two positive integer numbers
(for example, LCM of 8 and 12 = 24) using while statement -->
<?php

$num1 = 8;
$num2 = 12;

// Find the greater and smaller numbers
if ($num1 > $num2) {
    $greater = $num1;
    $smaller = $num2;
} else {
    $greater = $num2;
    $smaller = $num1;
}

// Initialize variables
$multiple = $greater;

while (true) {
    if ($multiple % $smaller == 0) {
        // The LCM is found when the multiple is divisible by the smaller number
        $lcm = $multiple;
        break;
    }
    // Increment the multiple by the greater number to check the next potential LCM
    $multiple += $greater;
}

// Print the LCM
echo "The LCM of $num1 and $num2 is $lcm\n";
?>


</body>
</html>