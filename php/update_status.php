<?php
// Database connection
include '../config/config.php';

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate input data
    if (isset($_POST['userId']) && is_numeric($_POST['userId']) && isset($_POST['action'])) {
        $userId = $_POST['userId'];
        $action = $_POST['action'];

        // Initialize SQL and success message
        $sql = '';
        $successMessage = '';

        // Prepare SQL statement based on action
        if ($action === 'accept') {
            $sql = "UPDATE property SET lot_status = 1 WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $userId);
            if ($stmt->execute()) {
                $successMessage = 'Property status updated successfully';
            }
            $stmt->close();

            $sql = "UPDATE sell_bulletin SET bulletin_status = 1 WHERE bulletin_user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $userId);
            if ($stmt->execute()) {
                $successMessage = 'Sell bulletin status updated successfully';
            }
            $stmt->close();
        } else {
            // Handle other actions if needed
            // Example: $sql = "UPDATE users SET status = 'deleted' WHERE id = ?";
        }

        // Check if any update was successful
        if (!empty($successMessage)) {
            // Respond with success message
            echo json_encode(['success' => true, 'message' => $successMessage]);
        } else {
            // Respond with error message
            echo json_encode(['error' => 'Error updating status']);
        }

        // Close database connection
        $conn->close();
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
?>
