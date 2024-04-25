<?php
// Database connection
include '../config/config.php';
include '../client/session.php';

// SQL query to fetch data
$sql = "SELECT 
m.message_date,
m.sender_id,
m.reciever_id,
m.message_content,
m.message_status,
u.user_fname,
u.user_lname,
u.user_profile
FROM 
(
    SELECT 
        sender_id,
        reciever_id,
        MAX(message_date) AS max_message_date
    FROM 
        messages
    GROUP BY 
        sender_id,
        reciever_id
) AS recent
JOIN 
messages m ON m.sender_id = recent.sender_id
           AND m.reciever_id = recent.reciever_id
           AND m.message_date = recent.max_message_date
JOIN 
users u ON m.reciever_id = u.id
WHERE m.sender_id = $id
ORDER BY 
m.message_date DESC -- Order by message_date in descending order";

$result = $conn->query($sql);

// Fetch data as associative array
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close connection
$conn->close();

// Return data as JSON
echo json_encode($data);
?>
