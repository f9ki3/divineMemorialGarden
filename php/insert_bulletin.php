<?php
// Include the config file to establish database connection
include '../config/config.php';

// Check if the POST data exists
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve POST data from JavaScript
    $userId = $_POST['id'] ?? '';
    $price = $_POST['price'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $email = $_POST['email'] ?? '';
    $note = $_POST['note'] ?? '';

    // Validate and process file upload (COO)
    $cooFileName = $_FILES['coo']['name'] ?? '';
    $cooTempName = $_FILES['coo']['tmp_name'] ?? '';
    $cooFileType = $_FILES['coo']['type'] ?? '';

    // Validate uploaded file
    if (!empty($cooFileName) && is_uploaded_file($cooTempName) && $cooFileType) {
        $allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];
        if (!in_array($cooFileType, $allowedTypes)) {
            die('Error: Invalid file type. Please upload a PNG, JPG, or JPEG file for COO.');
        }
    } else {
        die('Error: COO file is missing or invalid.');
    }

    // Prepare SQL statement to insert data into sell_bulletin table
    $sql = "INSERT INTO sell_bulletin (bulletin_date, bulletin_user_id, bulletin_price, bulletin_contact, bulletin_email, bulletin_coo, bulletin_note, bulletin_status)
            VALUES (NOW(), ?, ?, ?, ?, ?, ?, 0)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        $stmt->bind_param('idssss', $userId, $price, $contact, $email, $cooFileName, $note);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // Upload COO file to server
            $uploadPath = '../uploads/'; // Directory to store uploaded COO files
            $destination = $uploadPath . basename($cooFileName);

            if (move_uploaded_file($cooTempName, $destination)) {
                echo 'Data inserted successfully.';
            } else {
                echo 'Error uploading COO file.';
            }
        } else {
            echo 'Error inserting data: ' . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo 'Error preparing statement: ' . $conn->error;
    }
} else {
    echo 'Invalid request method.';
}

// Close the database connection
$conn->close();
?>
