<?php
// Database connection
include '../config/config.php';

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate input data
    if (isset($_POST['userId']) && is_numeric($_POST['userId']) && isset($_POST['action'])) {
        $userId = $_POST['userId'];
        $action = $_POST['action'];

        // Prepare SQL statement based on action
        if ($action === 'accept') {
            $sql = "UPDATE property SET lot_status = 1 WHERE id = ?";
        } elseif ($action === 'update') {
            // Example: $sql = "UPDATE users SET status = 'updated' WHERE id = ?";
            // Modify this line to handle other actions as needed
            $sql = "UPDATE sell_bulletin SET bulletin_status = 1 WHERE bulletin_user_id = ?";
        } else {
            // Invalid action
            http_response_code(400); // Bad Request
            echo json_encode(['error' => 'Invalid action']);
            exit; // Stop script execution
        }

        // Prepare and bind parameter
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            // Error preparing SQL statement
            http_response_code(500); // Internal Server Error
            echo json_encode(['error' => 'Database error']);
            exit; // Stop script execution
        }
        
        $stmt->bind_param('i', $userId);

        // Execute statement
        if ($stmt->execute()) {
            // Respond with success message
            echo json_encode(['success' => true, 'message' => 'User status updated successfully']);
        } else {
            // Respond with error message
            http_response_code(500); // Internal Server Error
            echo json_encode(['error' => 'Error updating user status']);
        }

        // Close statement
        $stmt->close();
    } else {
        // Invalid or missing input data
        http_response_code(400); // Bad Request
        echo json_encode(['error' => 'Invalid request data']);
    }
} else {
    // Invalid request method
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Method not allowed']);
}

// Close database connection
$conn->close();
?>
