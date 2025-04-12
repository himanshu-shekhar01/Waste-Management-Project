<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = htmlspecialchars(trim($_POST['name']));
    $email    = htmlspecialchars(trim($_POST['email']));
    $subject  = htmlspecialchars(trim($_POST['subject']));
    $message  = htmlspecialchars(trim($_POST['message']));

    $to = "pathaniadeepti05@gmail.com"; 
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $fullMessage = "Name: $name\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        header("Location: submit.php?success=1");
        exit();
    } else {
        header("Location: submit.php?error=1");
        exit();
    }
} else {
    header("Location: submit.php");
    exit();
}
?>
