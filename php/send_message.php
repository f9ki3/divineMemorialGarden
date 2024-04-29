<?php
// Include your database connection
include '../config/config.php';

// Assuming $conn is your database connection object

// Check if the necessary POST data is received
if (isset($_POST['sender_id'], $_POST['recieved_id'], $_POST['message_content'], $_POST['offer'])) {
    // Retrieve POST data
    $sender_id = $_POST['sender_id'];
    $receiver_id = $_POST['recieved_id'];
    $message_content = $_POST['message_content'];
    $offer = $_POST['offer'];

    // Prepare SQL statement to insert message into database using prepared statements
    $sql = "INSERT INTO `messages` ( `message_date`, `sender_id`, `reciever_id`, `message_content`, `message_status`)
            VALUES (NOW(),?, ?, ?,0)"; // Assuming 'message_date' is auto-generated on insert

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters and execute the statement
        $stmt->bind_param("iis", $sender_id, $receiver_id, $message_content);
        $stmt->execute();

        // Check if the message was successfully inserted
        if ($stmt->affected_rows > 0) {
            // Message successfully sent
            echo "Message sent successfully";
        } else {
            // Error inserting message
            echo "Failed to send message. Please try again.";
        }
            // Prepare SQL statement to insert offer into database using prepared statements
            $sql = "INSERT INTO `offers` (`offer_date`, `offer_amount`, `offer_user_id`, `offer_status`)
            VALUES (NOW(), ?, ?, 0)";

            // Prepare the SQL statement
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("di", $offer, $sender_id);
            $stmt->execute();
        // Close statement
        $stmt->close();
    } else {
        // Error preparing statement
        echo "Database error. Please try again.";
    }
} else {
    // Invalid POST data
    echo "Invalid data received. Please try again.";
}

// Close database connection
$conn->close();
?>

