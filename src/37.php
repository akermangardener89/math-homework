<?php
// Define some constants and variables
$student_id = 123;
$password = "password";

// Perform some actions based on user input
$input = "Hello, $student_id!";
echo $input;

// Example of a login function using PHP's $_POST array
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        // Check the credentials against the stored data
        if ($user == "student" && $pass == $password) {
            echo "Login successful!";
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "No POST request received.";
    }
}
