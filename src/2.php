
<?php
// Get a random number between 1 and 100
$randomNumber = rand(1, 100);

// Ask the user to guess the number
echo "Guess the number: ";
$guess = intval(readline());

// Check if the guess is correct
if ($guess === $randomNumber) {
    echo "You won! The number was $randomNumber";
} else {
    echo "Sorry, you lost. The number was $randomNumber";
}
?>