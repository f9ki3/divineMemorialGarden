<?php
// Database connection
include '../config/config.php';

// SQL query to fetch data
$sql = "SELECT * FROM sell_bulletin WHERE bulletin_status = 0";

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
