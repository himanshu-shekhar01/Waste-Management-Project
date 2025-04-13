<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Load Composer's autoloader
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'codewithhimanshu89@gmail.com';         // 🔑 Use your Gmail
        $mail->Password   = 'tbvg mdax sxhi spmu';           // 🔒 App Password (not your Gmail password)
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email details
        $mail->setFrom($email, $name);
        $mail->addAddress('codewithhimanshu89@gmail.com'); // Your email to receive the form

        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        $mail->send();
        header("Location: submit.php?success=1");
        exit();
    } catch (Exception $e) {
        error_log("Mailer Error: " . $mail->ErrorInfo);
        header("Location: submit.php?error=1");
        exit();
    }
}
?>
