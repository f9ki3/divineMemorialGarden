<?php
// Include database configuration file
include('../config/config.php');

// Assuming this part as the server database connection and the prepared statement.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    // Check if the email exists in your database
    $email = $data['email'];
    
    try {
        // Prepare a statement to check if the email exists
        $stmt = $conn->prepare("SELECT * FROM users WHERE user_email = ?");
        $stmt->execute([$email]);

        $exists = $stmt->fetch();

        // Return response based on email existence
        echo json_encode(['exists' => $exists]);
    } catch (PDOException $e) {
        // Handle database errors
        http_response_code(500); // Internal Server Error
        echo json_encode(['message' => 'Database error occurred.']);
    }
}
?>
