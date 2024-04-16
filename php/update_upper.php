<?php
// Ensure that the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the posted data and sanitize
    $upperName = isset($_POST['upper_name']) ? trim($_POST['upper_name']) : '';
    $deceasedStatus = isset($_POST['deceased_status']) ? trim($_POST['deceased_status']) : '';
    $dod = isset($_POST['dod']) ? trim($_POST['dod']) : '';
    $dob = isset($_POST['dob']) ? trim($_POST['dob']) : '';
    $propertyId = isset($_POST['property_id']) ? intval($_POST['property_id']) : 0;

    // Include database connection
    require_once '../config/config.php'; // Adjust the path as needed

    // Validate propertyId to ensure it's a valid integer
    if ($propertyId <= 0) {
        die("Invalid property ID");
    }

    // Prepare SQL statements with placeholders
    $checkQuery = "SELECT * FROM deceased_person WHERE id = ? AND deceased_type = 'upper'";
    $updateQuery = "UPDATE deceased_person SET 
                    deceased_name = ?,
                    date = NOW(),
                    grave_status = ?,
                    dod = ?,
                    dob = ?
                    WHERE id = ? AND deceased_type = 'upper'";
    $insertQuery = "INSERT INTO deceased_person (property_id, date, deceased_type, deceased_name, grave_status, dod, dob)
                    VALUES (?, NOW(), 'upper', ?, ?, ?, ?)";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("i", $propertyId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Record exists, perform UPDATE
        $stmt = $conn->prepare($updateQuery);
        $stmt->bind_param("sssss", $upperName, $deceasedStatus, $dod, $dob, $propertyId);

        if ($stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $stmt->error;
        }
    } else {
        // Record does not exist, perform INSERT
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("issss", $propertyId, $upperName, $deceasedStatus, $dod, $dob);

        if ($stmt->execute()) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: " . $stmt->error;
        }
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // If the request method is not POST, handle the error accordingly
    echo "Invalid request method";
}
?>
