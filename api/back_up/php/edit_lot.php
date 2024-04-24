<?php
// edit_lot.php
include '../config/config.php';
// Check if request method is POST and content type is JSON
if ($_SERVER["REQUEST_METHOD"] === "POST" && strpos($_SERVER["CONTENT_TYPE"], "application/json") !== false) {
    // Get JSON content from the request body
    $inputJSON = file_get_contents('php://input');
    // Decode JSON data to associative array
    $input = json_decode($inputJSON, true);

    // Retrieve data from the JSON payload
    $id = $input['id'];
    $ownerName = $input['ownerName'];
    $lotStatus = $input['lotStatus'];
    $classification = $input['classification'];

    // Prepare SQL statement to update lot information
    $sql = "UPDATE property SET lot_owner = '$ownerName', lot_status = '$lotStatus', classification = '$classification' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // If update is successful
        $response = array('status' => 'success', 'message' => 'Lot updated successfully');
        echo json_encode($response);
    } else {
        // If update fails
        $response = array('status' => 'error', 'message' => 'Error updating lot: ' . $conn->error);
        echo json_encode($response);
    }

    // Close database connection
    $conn->close();
} else {
    // If request method is not POST or content type is not JSON
    http_response_code(400); // Bad request
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request'));
}
?>
