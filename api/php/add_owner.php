<?php
// Assuming you have a database connection established

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST request
    include '../config/config.php';
    // Retrieve data from POST request
    $date = $_POST["date"];
    $classification = $_POST["classification"];
    $block_number = $_POST["block_number"];
    $lot_number = $_POST["lot_number"];
    $owner_name = strtoupper($_POST["owner_name"]); 

    // SQL query to insert data into the property table
    $sql = "INSERT INTO property (date, area, block_number, lot_number, classification, lot_owner) 
            VALUES ('$date', 'Lawn 1', '$block_number', '$lot_number', '$classification', '$owner_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Data added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method";
}
?>
