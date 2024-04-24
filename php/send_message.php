<?php
// Include your database connection
include '../config/config.php';

// Retrieve data sent via AJAX
$recipientId = $_POST['recipient_id'];
$senderId = $_POST['sender_id'];
$messageContent = $_POST['message_content'];

// Additional fields for message
$messageDate = date('Y-m-d H:i:s'); // Current date and time
$messageStatus = 'unread'; // Initial message status

// Prepare SQL statement to insert message into database
$sql = "INSERT INTO messages (message_date, sender_id, receiver_id, message, message_status) 
        VALUES ('$messageDate', '$senderId', '$recipientId', '$messageContent', '$messageStatus')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
