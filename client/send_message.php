<?php
// Include your database connection
include '../config/config.php';

// Ensure that the script is accessed via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve POST data
    $recieved_id = $_POST['recieved_id'];
    $sender_id = $_POST['sender_id'];
    $message_content = $_POST['message_content'];

    // Validate input (you may want to perform more thorough validation)
    if (empty($message_content)) {
        http_response_code(400); // Bad Request
        exit("Empty message content");
    }

    // Prepare and execute the SQL INSERT query
    $stmt = $conn->prepare("INSERT INTO messages (sender_id, reciever_id, message_content) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $recieved_id, $sender_id, $message_content);

    if ($stmt->execute()) {
        // If insertion is successful
        http_response_code(200); // OK
        exit("Message sent successfully");
    } else {
        // If insertion fails
        http_response_code(500); // Internal Server Error
        exit("Error sending message");
    }

} else {
    // If accessed via method other than POST
    http_response_code(405); // Method Not Allowed
    exit("Method not allowed");
}
?>
