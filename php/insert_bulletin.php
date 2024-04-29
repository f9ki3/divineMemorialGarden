<?php
// Include the config file to establish database connection
include '../config/config.php';

// Check if the POST data exists
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve POST data from JavaScript
    $userId = $_POST['id'] ?? '';
    $propertyId = $_POST['propertyId'] ?? '';
    $price = $_POST['price'] ?? '';
    $contact_seller = $_POST['contact_seller'] ?? '';
    $email = $_POST['email'] ?? '';
    $offer = $_POST['offer'] ?? '';

    // Prepare SQL statement to insert data into sell_bulletin table
    $sql = "INSERT INTO sell_bulletin (bulletin_date, bulletin_user_id, bulletin_price, bulletin_contact, bulletin_email, bulletin_offer, bulletin_status)
    VALUES (NOW(), ?, ?, ?, ?, ?, 0)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        // Updated bind_param with correct data types and order
        $stmt->bind_param('issss', $userId, $price, $contact_seller, $email, $offer);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // Update property lot_status after successful upload
            if (!empty($propertyId)) {
                $sqlUpdate = "UPDATE `property` SET `lot_status` = 0, `request_status` = 1 WHERE `id` = ?";
                $stmtUpdate = $conn->prepare($sqlUpdate);
                $stmtUpdate->bind_param("i", $propertyId);
                $stmtUpdate->execute();
                $stmtUpdate->close();
            }

            echo 'Data inserted successfully.';
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
