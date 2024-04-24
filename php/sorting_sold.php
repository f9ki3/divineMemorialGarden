<?php
// Your PHP code here
include '../config/config.php';
// Assuming $conn is your database connection
$query = "SELECT block_number, lot_number, lot_status FROM property";

// Perform the query
$result = mysqli_query($conn, $query);

// Check if the query executed successfully
if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

// Initialize an array to hold the data
$data = array();

// Check if there are rows returned
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"]; // Concatenate block_number and lot_number
        $status = $row["lot_status"];
        
        // Push data to the array
        $data[] = array(
            'id' => $id,
            'status' => $status
        );
    }
} else {
    echo "0 results";
}

// Free result set
mysqli_free_result($result);

// Close the connection
mysqli_close($conn);

// Convert PHP array to JSON
$json_data = json_encode($data);

// Output JSON data
header('Content-Type: application/json');
echo $json_data;
?>
