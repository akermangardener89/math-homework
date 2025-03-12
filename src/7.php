
<?php
function getRandomNumber($min = 1, $max = 10) {
    return rand($min, $max);
}

$number1 = getRandomNumber();
$number2 = getRandomNumber();
echo "The sum of $number1 and $number2 is: ". ($number1 + $number2);
?>