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
$full_name = $conn->real_escape_string($_POST['full_name']);
$email = $conn->real_escape_string($_POST['email']);
$phone_number = $conn->real_escape_string($_POST['phone_number']);
$location = $conn->real_escape_string($_POST['location']);
$area_of_expertise = $conn->real_escape_string($_POST['area_of_expertise']);
$affiliation = $conn->real_escape_string($_POST['affiliation']);
$gender = $conn->real_escape_string($_POST['gender']);
$membership_time = $conn->real_escape_string($_POST['membership_time']);


// Check if the email already exists
$email_check = $conn->prepare("SELECT email FROM members WHERE email = ?");
$email_check->bind_param("s", $email);
$email_check->execute();
$email_check->store_result();

if ($email_check->num_rows > 0) {
    echo "<p>Email is already registered. Please use a different email address.</p>";
    echo "<a href='registration_form.html'>Go back to the registration form</a>";
    $email_check->close();
    $conn->close();
    exit();
}

$email_check->close();

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO members (full_name, email, phone_number, location, area_of_expertise, affiliation, gender, membership_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $full_name, $email, $phone_number, $location, $area_of_expertise, $affiliation, $gender, $membership_time);

// Execute the statement
if ($stmt->execute()) {
    // Redirect to the welcome page
    header("Location: welcome.php");
    exit();
} else {
    echo "<p>Error: " . $stmt->error . "</p>";
    echo "<a href='registration_form.html'>Go back to the registration form</a>";
}

// Close connections
$stmt->close();
$conn->close();
?>
