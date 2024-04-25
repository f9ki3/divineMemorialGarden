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
$sql = "SELECT *
        FROM messages
        WHERE sender_id = $id
          AND reciever_id = " . $conn->real_escape_string($receiverId) . "
        ORDER BY message_date DESC";

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
