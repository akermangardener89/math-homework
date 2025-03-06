 <?php
    // Generate a random number between 1 and 100
    $randomNumber = rand(1, 100);

    // Ask the user to guess the number
    echo "Guess a number between 1 and 100: ";

    // Read input from the user
    $userInput = trim(fgets(STDIN));

    // Check if the user's guess is equal to the random number
    if ($userInput == $randomNumber) {
        echo "You are correct! The number was $randomNumber.";
    } else {
        echo "Sorry, you are incorrect. The correct answer is $randomNumber.";
    }
?>