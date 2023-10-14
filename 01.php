<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body>
<?php
// Define three integer numbers
$number1 = 85;
$number2 = 82;
$number3 = 87;


$max = $number1;
$min = $number1;

// Compare the numbers
if ($number2 > $max) {
    $max = $number2;
}
if ($number2 < $min) {
    $min = $number2;
}

if ($number3 > $max) {
    $max = $number3;
}
if ($number3 < $min) {
    $min = $number3;
}

echo "The greatest number is: " . $max. "<br>";
echo "The smallest number is: " . $min;
?>

</body>
</html>