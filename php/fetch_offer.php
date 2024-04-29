<?php
// Database connection
include '../config/config.php';
include '../client/session.php';

if (isset($_POST['received_id'])) {
    // Retrieve POST data and sanitize
    $received_id = $conn->real_escape_string($_POST['received_id']);

    // SQL query to fetch data
    $sql = "SELECT users.user_property_id, sell_bulletin.bulletin_price, property.*
    FROM users
    JOIN sell_bulletin ON sell_bulletin.bulletin_user_id = users.user_property_id
    JOIN property ON property.id = users.user_property_id
    WHERE users.id = $received_id";

    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch result as an associative array
        $row = $result->fetch_assoc();
        
        // Encode the result in JSON format
        echo json_encode($row);
    } else {
        // If no rows are returned, return an error message
        echo json_encode(array('error' => 'No data found for the given ID'));
    }

    // Free result set
    $result->free();
    
    // Close connection
    $conn->close();

} else {
    // If received_id is not set, return an error message
    echo json_encode(array('error' => 'Received ID is not set'));
}
?>
