<?php
// Include database configuration
include '../config/config.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate incoming data
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $propertyId = $_POST['id'] ?? '';

    // Check if both username and password are provided
    if (empty($username) || empty($password)) {
        http_response_code(400);
        echo json_encode(array('message' => 'Username and password are required.'));
        exit;
    }

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Get current date and time
    $currentDateTime = date('Y-m-d H:i:s');

    // Prepare SQL statement to insert user into the database
    $sql = "INSERT INTO users (user_date_added, user_property_id, user_name, user_password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("ssss", $currentDateTime, $propertyId, $username, $hashedPassword);

    if ($stmt->execute()) {
        // Insert successful
        http_response_code(201); // Created
        echo json_encode(array('message' => 'User created successfully.'));
    } else {
        // Insert failed
        http_response_code(500); // Internal Server Error
        echo json_encode(array('message' => 'Unable to create user.'));
    }

    // Close statement
    $stmt->close();
} else {
    // If the request is not POST, return error
    http_response_code(405); // Method Not Allowed
    echo json_encode(array('message' => 'Method not allowed.'));
}

// Close database connection
$conn->close();
?>
