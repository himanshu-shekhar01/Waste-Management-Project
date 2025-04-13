<?php
// Database connection parameters
$host = 'localhost';  // Adjust if your database is on a different server
$username = 'root';    // Replace with your database username
$password = '';        // Replace with your database password
$dbname = 'waste_collection'; // The database you created

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $userName = trim($_POST['userName']);
    $greenAddress = trim($_POST['greenAddress']);
    $greenService = $_POST['greenService'];

    // Validation: Ensure fields are not empty
    if (empty($userName) || empty($greenAddress) || empty($greenService)) {
        echo "<div class='text-red-600 font-semibold text-center mt-4'>❌ Please fill in all fields!</div>";
    } else {
        // Prepare and bind the SQL query
        $stmt = $conn->prepare("INSERT INTO requests (user_name, green_address, green_service) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $userName, $greenAddress, $greenService); // "sss" means the three values are strings

        // Execute the query
        if ($stmt->execute()) {
            // Display success message with dynamic name
            echo "<h2 style='text-align:center; color:green; font-family:sans-serif; margin-top:50px;'>✅ Thank you, $userName! Your request has been saved.</h2>";
            echo "<p style='text-align:center;'><a href='main.php' style='color:#007BFF;'>Back to Form</a></p>";
        } else {
            echo "<div class='text-red-600 font-semibold text-center mt-4'>❌ Error: " . $stmt->error . "</div>";
        }

        // Close the statement
        $stmt->close();
    }
}

// Close the database connection
$conn->close();
?>
