<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 11</title>
</head>
<body>
    <!--. Write a program that prints Fibonacci series, 
    a series of numbers in which each number is the sum 
    of the two preceding numbers. For example,
    0, 1, 1, 2, 3, 5, 8, 13, 21, 34, etc using while
    statement  -->
    <?php
$numTerms = 10;

$firstTerm = 0;
$secondTerm = 1;

echo $firstTerm . " " . $secondTerm . " ";

$counter = 2;

while ($counter < $numTerms) {
    $nextTerm = $firstTerm + $secondTerm;
    echo $nextTerm . " ";
    $firstTerm = $secondTerm;
    $secondTerm = $nextTerm;
    $counter++;
}
?>
    
</body>
</html>