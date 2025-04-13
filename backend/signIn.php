<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start session and include database connection
session_start();
include 'connect.php';

// Check if form is submitted
if (isset($_POST['signIn'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Debugging step: print POST variables to check if form data is being passed
    var_dump($_POST); // You can remove this after debugging

    // Prepare SQL query to check if the user exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists in the database
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Store user info in session
            $_SESSION['success'] = "Welcome back, " . $user['firstName'] . "!";
            $_SESSION['user'] = $user;
            header("Location: ../main.php");  // Redirect to the main page on success
            exit();
        } else {
            // Incorrect password, display error and stay on the sign-in page
            $_SESSION['error'] = "Incorrect password!";
            header("Location: ../signIn.php");
            exit();
        }
    } else {
        // User not found, display error and redirect to the register page
        $_SESSION['error'] = "User not found! Please register.";
        header("Location: ../register.php");
        exit();
    }
}
