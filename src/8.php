
<?php
$math_problem = "What is 2 + 2?";
$math_answer = 4;
echo $math_problem . "<br>";
if (isset($_POST['submit'])) {
    if ($_POST['user_answer'] == $math_answer) {
        echo "Correct! You have a math problem in your brain!";
    } else {
        echo "Incorrect. Try again.";
    }
}
?>