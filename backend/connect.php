<?php
$host = "localhost";
$user = "root"; // default username for local server
$pass = "";     // default password is empty
$db   = "ecowaste";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
