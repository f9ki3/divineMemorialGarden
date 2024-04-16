<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the JSON data sent from the client-side JavaScript
    $json_data = file_get_contents("php://input");

    // Decode the JSON data into a PHP associative array
    $form_data = json_decode($json_data, true);

    // Check if the form data was successfully decoded
    if ($form_data !== null) {
        // Extract visitor_id from form data
        $visitor_id = isset($form_data['visitor_id']) ? $form_data['visitor_id'] : null;

        if ($visitor_id === null) {
            http_response_code(400); // Bad Request
            echo "Error: Visitor ID is missing.";
            exit;
        }

        include '../config/config.php';

        // Prepare SQL statement to update user information
        $sql = "UPDATE users SET
                user_fname = ?,
                user_lname = ?,
                user_contact = ?,
                user_address = ?,
                user_barangay = ?,
                user_municipal = ?,
                user_province = ?,
                user_profile = ?,
                user_zipcode = ?
                WHERE id = ?";

        // Prepare and bind parameters for the SQL statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "sssssssssi",
            $form_data['fname'],
            $form_data['lname'],
            $form_data['contact'],
            $form_data['address'],
            $form_data['barangay'],
            $form_data['municipal'],
            $form_data['province'],
            $form_data['profile'],
            $form_data['zipcode'],
            $visitor_id
        );

        // Execute the SQL statement
        if ($stmt->execute()) {
            echo "User information updated successfully.";
        } else {
            echo "Error updating user information: " . $stmt->error;
        }

        // Close statement and database connection
        $stmt->close();
        $conn->close();
    } else {
        // Invalid JSON data received
        http_response_code(400); // Bad Request
        echo "Error: Invalid JSON data received.";
    }
} else {
    // Invalid request method
    http_response_code(405); // Method Not Allowed
    echo "Error: Only POST requests are allowed.";
}
?>
