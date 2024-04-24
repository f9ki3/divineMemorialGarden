<?php
// Database connection
include '../config/config.php';

// SQL query to fetch data
$sql = "SELECT * FROM users WHERE user_type = 1";

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
