<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName = trim($_POST['firstName']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if user already exists
    $checkUser = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkUser->bind_param("s", $email);
    $checkUser->execute();
    $result = $checkUser->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "User already exists!";
        header("Location: ../register.php"); // ✅ redirect to login
        exit();
    }

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO users (firstName, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstName, $email, $password);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Registration successful! Please log in.";
        header("Location: ../main.php"); // ✅ correct flow
        exit();
    } else {
        $_SESSION['error'] = "Something went wrong: " . $stmt->error;
        header("Location: ../register.php");
        exit();
    }
}
?>
