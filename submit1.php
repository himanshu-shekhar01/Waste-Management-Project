<?php
// Database connection settings
$host = "localhost";
$username = "root";
$password = ""; // Use your actual MySQL password
$database = "recycling_db";

// Create DB connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $address = $conn->real_escape_string($_POST["address"]);
    $waste_type = $conn->real_escape_string($_POST["waste_type"]);
    $status = "Submitted";

    // Insert into table
    $sql = "INSERT INTO recycling_requests (name, address, waste_type, status)
            VALUES ('$name', '$address', '$waste_type', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "<h2 style='text-align:center; color:green; font-family:sans-serif; margin-top:50px;'>✅ Thank you, $name! Your request has been saved.</h2>";
        echo "<p style='text-align:center;'><a href='main.php' style='color:#007BFF;'>Back to Form</a></p>";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
