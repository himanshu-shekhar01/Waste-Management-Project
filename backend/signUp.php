<?php
session_start();
include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure password

    // Check if user already exists
    $checkUser = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkUser->bind_param("s", $email);
    $checkUser->execute();
    $result = $checkUser->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "User already exists!";
        header("Location: ../signup.php"); // redirect to sign-up page
        exit();
    }

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (firstName, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstName, $email, $password);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Registration successful! Please log in.";
        header("Location: ../login.php"); // go to login page after registration
        exit();
    } else {
        $_SESSION['error'] = "Something went wrong: " . $stmt->error;
        header("Location: ../signup.php");
        exit();
    }
}
?>
