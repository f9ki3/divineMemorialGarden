<?php
// Include database configuration file
include('../config/config.php');

// Get email from POST request
$data = json_decode(file_get_contents("php://input"));
$email = $data->email;

// Prepare SQL statement with a parameterized query to prevent SQL injection
$sql = "SELECT COUNT(*) as count FROM users WHERE user_email = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    // Handle prepare error (e.g., log the error, return an error response)
    echo json_encode(['error' => 'Failed to prepare statement']);
    exit;
}

$stmt->bind_param("s", $email);
$stmt->execute();

// Bind result variables
$stmt->bind_result($count);

// Fetch result
$stmt->fetch();

// Check if the email exists in the database
$exists = $count > 0;

// Close statement
$stmt->close();

// Close database connection (assuming $conn is established in config.php)
$conn->close();

// Send response as JSON
echo json_encode(['exists' => $exists]);
?>
