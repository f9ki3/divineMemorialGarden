<?php
// Database connection
include '../config/config.php';

// SQL query to fetch data from the property table
$sql = "SELECT area, block_number, lot_number, classification, lot_owner FROM property ORDER BY area DESC";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    // Fetching data and storing in array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close connection
$conn->close();

// Sending JSON response
header('Content-Type: application/json');
echo json_encode($data);
?>
