
<?php
// Random math problem generation function
function generateProblem() {
  // Generate two random numbers between 1 and 10
  $num1 = rand(1, 10);
  $num2 = rand(1, 10);

  // Choose a random operator (+, -, *, /)
  $operator = ["+", "-", "*", "/"][rand(0, 3)];

  // Return the problem as a string
  return "$num1 $operator $num2";
}

// Call the function to generate a problem
$problem = generateProblem();

// Display the problem for the user to solve
echo "Solve this problem: $problem";
?>