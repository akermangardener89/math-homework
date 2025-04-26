<?php
// Initialize the session and set the required variables
session_start();
$username = "your_username";
$password = "your_password";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if the username and password are correct
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $user, ':password' => $hashed_password]);
    
    if ($stmt->rowCount() > 0) {
        $_SESSION['username'] = $user;
        echo "Login successful!";
    } else {
        echo "Invalid username or password";
    }
}
?>
