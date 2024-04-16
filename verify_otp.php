<?php
// Include database connection
include 'config/config.php';

// Check if the 'otp' parameter is received via POST
if (isset($_POST['otp'])) {
    // Retrieve the received OTP value from the AJAX request
    $receivedOTP = $_POST['otp'];

    // Prepare and execute a safe SQL query to retrieve the user's valid OTP
    $stmt = $conn->prepare("SELECT user_otp FROM users WHERE user_otp = ?");
    
    // Check if preparation was successful
    if ($stmt) {
        $stmt->bind_param("s", $receivedOTP);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a matching OTP was found in the database
        if ($result->num_rows > 0) {
            // Mark OTP as used
            $updateStmt = $conn->prepare("UPDATE users SET user_otp_status = 1 WHERE user_otp = ?");
            if ($updateStmt) {
                $updateStmt->bind_param("s", $receivedOTP);
                $updateStmt->execute();
                $updateStmt->close();
            } else {
                // If updating failed, return an error response
                http_response_code(500); // Internal Server Error
                echo 'Error: Database update preparation failed.';
                exit();
            }

            // If OTP is valid, return 'valid'
            echo 'valid';
        } else {
            // If OTP is invalid, return 'invalid'
            echo 'invalid';
        }

        // Close result set and prepared statement
        $result->close();
        $stmt->close();
    } else {
        // If preparation failed, return an error response
        http_response_code(500); // Internal Server Error
        echo 'Error: Database query preparation failed.';
    }

    // Close database connection
    $conn->close();

} else {
    // If 'otp' parameter is not received, return an error response
    http_response_code(400); // Bad Request
    echo 'Error: OTP parameter is missing.';
}
?>
