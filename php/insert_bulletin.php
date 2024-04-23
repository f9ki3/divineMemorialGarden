<?php
// Include the config file to establish database connection
include '../config/config.php';

// Check if the POST data exists
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve POST data from JavaScript
    $userId = $_POST['propertyId'] ?? '';
    $propertyId = $_POST['propertyId'] ?? '';
    $price = $_POST['price'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $email = $_POST['email'] ?? '';
    $note = $_POST['note'] ?? '';

    // Validate and process file upload (COO)
    $cooFileName = $_FILES['coo']['name'] ?? '';
    $cooTempName = $_FILES['coo']['tmp_name'] ?? '';
    $cooFileType = $_FILES['coo']['type'] ?? '';

    // Validate uploaded file
    if (!empty($cooFileName) && is_uploaded_file($cooTempName) && in_array($cooFileType, ['image/png', 'image/jpeg', 'image/jpg'])) {
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
                    // Update property lot_status after successful upload
                    if (!empty($propertyId)) {
                        $sqlUpdate = "UPDATE `property` SET `lot_status` = '1' WHERE `id` = ?";
                        $stmtUpdate = $conn->prepare($sqlUpdate);
                        $stmtUpdate->bind_param("i", $propertyId);
                        $stmtUpdate->execute();
                        $stmtUpdate->close();
                    }

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
        echo 'Error: COO file is missing, invalid, or not an allowed file type (PNG, JPG, JPEG).';
    }
} else {
    echo 'Invalid request method.';
}

// Close the database connection
$conn->close();
?>
