<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All</title>
</head>
<body>
     
    <?php
    echo "<br>" . "<b>Question 1</b>". "<br>";
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

    // question 2
    echo "<br>" . "<b>Question 2</b>". "<br>";
    $factorial=5;
    $total=1;
    for($i=1; $i<=$factorial; $i++){
        $total*=$i;
    }
    echo "The foctorial of " .$factorial . " is " .  $total;

    // question 3
    echo "<br>" . "<b>Question 3</b><br>";
    $y = 6;

while($y>0){
    if($y%2==0){
        echo $y .  " is even ";
        break;
    }
    else{
        echo $y .  " is odd  ";
        break;
    }
}

//question 4
echo "<br>" . "<b>Question 4</b>". "<br>";
$number=2;
do{
    
    if($number % 2 != 0){
        echo $number . " ";
    }
    $number++;
   
}while($number<=20);

// question 5
echo "<br>" . "<b>Question 5</b>". "<br>";
for($i=1; $i<=50; $i++){
    if($i % 5 ==0){
       echo  $i . " ";
    }
}
//question 6
echo "<br>" . "<b>Question 6</b>". "<br>";
$number = 42;
while($number <=42){
    for($i=1; $i<=$number; $i++){
        if($number % $i == 0){
            echo $i . " ";
        }
    }
    $number++;
}

//question 7
echo "<br>" . "<b>Question 7</b>". "<br>";
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

//question 8
echo "<br>" . "<b>Question 8</b>";
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
echo "<br>". "The LCM of $num1 and $num2 is $lcm\n";
// question 9
echo "<br>" . "<b>Question 9</b>";
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
    echo "<br>". "$number is a prime number.\n";
} else {
    echo "<br>". "$number is not a prime number.\n";
}

// question 10
echo "<br>" . "<b>Question 10</b>". "<br>";
$number = 90;

echo "Non-prime numbers from 90 to 12 using while and do-while loops:\n";

do {
    $isPrime = true;
    $i = 2;

    while ($i <= $number / 2) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
        $i++;
    }

    if (!$isPrime) {
        echo $number . " ";
    }

    $number--;

} while ($number >= 12);

echo  "<br>";
//question 11
echo "<b>Question 11</b>". "<br>";
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