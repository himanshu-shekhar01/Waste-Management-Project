<?php
session_start();
include 'connect.php';

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['success'] = "Welcome back, " . $user['firstName'] . "!";
            $_SESSION['user'] = $user;
            header("Location: ../main.php");  // ✅ Redirect to main if success
            exit();
        } else {
            $_SESSION['error'] = "Incorrect password!";
            header("Location: ../main.php"); // ❌ Wrong password, back to login
            exit();
        }
    } else {
        $_SESSION['error'] = "User not found! Please register.";
        header("Location: ../main.php"); // ❌ User doesn't exist, go to login
        exit();
    }
}
?>
