<?php
// Database connection
include '../config/config.php';
include '../client/session.php';

// Retrieve receiverId from POST data
$receiverId = isset($_GET['receiverId']) ? $_GET['receiverId'] : null;

if (!$receiverId) {
    // If receiverId is not provided in POST data, return an error response (you can modify this part as needed)
    http_response_code(400); // Bad request
    echo json_encode(['error' => 'Receiver ID not provided']);
    exit;
}

// SQL query to fetch data based on receiverId
$sql = "SELECT id, message_date, sender_id, reciever_id, message_content, message_status
FROM messages
WHERE (sender_id = $id AND reciever_id = $receiverId)
   OR (sender_id = $receiverId AND reciever_id = $id)
ORDER BY message_date;
";

$result = $conn->query($sql);

// Fetch data as associative array
$data = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close connection
$conn->close();

// Return data as JSON
echo json_encode($data);
?>
