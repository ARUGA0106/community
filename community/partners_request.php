<?php
// Database connection settings
$servername = "localhost"; // Change if needed
$username = "root";        // Change to your database username
$password = "";            // Change to your database password
$dbname = "community";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$role = $conn->real_escape_string($_POST['role']);
$institution = $conn->real_escape_string($_POST['institution']);
$timeframe = $conn->real_escape_string($_POST['timeframe']);
$location = $conn->real_escape_string($_POST['location']);
$expertise = $conn->real_escape_string($_POST['expertise']);
$message = $conn->real_escape_string($_POST['message']);

// Check for duplicate email
$check_email = $conn->prepare("SELECT email FROM partner WHERE email = ?");
$check_email->bind_param("s", $email);
$check_email->execute();
$check_email->store_result();

if ($check_email->num_rows > 0) {
    echo "<p>Email is already registered. Please use a different email.</p>";
    $check_email->close();
    $conn->close();
    exit();
}

$check_email->close();

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO partner (name, email, phone, role, institution, timeframe, location, expertise, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $name, $email, $phone, $role, $institution, $timeframe, $location, $expertise, $message);

// Execute the statement
if ($stmt->execute()) {
    header("Location: welcome.php"); // Redirect to the welcome page
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
