<?php
// Establish database connection
include '../config/config.php';

// Check if the form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $accountName = $_POST['account_name'];
    $graveStatus = $_POST['grave_status'];
    $blockLot = $_POST['block_lot'];
    $lotStatus = $_POST['lot_status'];
    $deceaseName = $_POST['decease_name'];
    $tierType = $_POST['tier_type'];
    $dob = $_POST['dob'];
    $dod = $_POST['dod'];
    $dateService = $_POST['date_service'];
    $paymentMethod = $_POST['payment_method'];
    $serviceStatus = $_POST['service_status'];

    // File upload handling
    $targetDir = "../uploads/"; // Specify the directory where you want to save the uploaded files
    $proofOfPaymentName = basename($_FILES["proof_of_payment"]["name"]);
    $targetFilePath = $targetDir . $proofOfPaymentName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    // Check if file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["proof_of_payment"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Move uploaded file to destination
        if (move_uploaded_file($_FILES["proof_of_payment"]["tmp_name"], $targetFilePath)) {
            // Prepare and execute SQL query to insert data into the table
            $sql = "INSERT INTO burial_service_transaction (date_of_service, account_name, grave_status, block_lot, lot_status, decease_name, tier_type, dob, dod, date_service, payment_method, proof_of_payment, service_status) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            // Prepare the SQL statement
            $stmt = $conn->prepare($sql);

            // Bind parameters to the SQL statement
            $stmt->bind_param("ssssssssssssi", $dateService, $accountName, $graveStatus, $blockLot, $lotStatus, $deceaseName, $tierType, $dob, $dod, $dateService, $paymentMethod, $proofOfPaymentName, $serviceStatus);

            // Execute the statement
            if ($stmt->execute()) {
                echo "Record inserted successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close the prepared statement
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    // If the request method is not POST, show an error
    echo "Error: Method not allowed.";
}
?>
