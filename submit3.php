<?php
// Database connection settings
$host = "localhost";
$username = "root";
$password = ""; // Use your MySQL password if set
$database = "ecospark_db";

// Create DB connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST["userName"]);
    $address = $conn->real_escape_string($_POST["greenAddress"]);
    $service = $conn->real_escape_string($_POST["greenService"]);
    $status = "Pledged";

    // Insert into table
    $sql = "INSERT INTO green_pledges (name, address, service, status)
            VALUES ('$name', '$address', '$service', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2 style='text-align:center; color:green; font-family:sans-serif; margin-top:50px;'>🌱 Thank you, $name! Your green pledge has been saved.</h2>";
        echo "<p style='text-align:center;'><a href='main.php' style='color:#7e57c2;'>🌿 Back to EcoSpark Form</a></p>";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
