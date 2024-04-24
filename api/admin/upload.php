<?php
// Check if a file was uploaded
if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = '../uploads/';
    $filename = basename($_FILES['file']['name']);
    $uploadPath = $uploadDir . $filename;

    // Move the uploaded file to the desired directory
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath)) {
        // File upload successful, now interact with the database
        include('../config/config.php');

        // Get the id sent from JavaScript
        $id = $_POST['id'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        // Prepare the SQL statement to update the 'map_img' column in the 'property' table
        $sql = "UPDATE property SET map_img = '$filename' WHERE id = ?";

        // Use prepared statement to prevent SQL injection
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id); // Bind the id parameter as an integer

        if ($stmt->execute()) {
            echo $filename; // Send filename back to JavaScript
        } else {
            echo 'Error updating record: ' . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo 'Error uploading file.';
    }
} else {
    echo 'File upload error.';
}
?>
