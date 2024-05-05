<?php
// Include the config file to establish database connection
include '../config/config.php';

// Check if the POST data exists
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract data from POST request
    $seller = $_POST['seller'];
    $buyer = $_POST['buyer'];
    $ownerName = $_POST['ownerName'];
    $classification = $_POST['classification'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $paymentMethod = $_POST['paymentMethod'];

    // File upload directory
    $uploadDir = '../uploads/';

    // File paths
    $proofOfLotPaymentPath = basename($_FILES['proofOfLotPayment']['name']);
    $deedOfSalesPath = basename($_FILES['deedOfSales']['name']);
    $authorizationLetterPath = basename($_FILES['authorizationLetter']['name']);
    $proofOfPaymentPath = basename($_FILES['proofOfPayment']['name']);    

    // Move uploaded files to the upload directory
    move_uploaded_file($_FILES['proofOfLotPayment']['tmp_name'], $proofOfLotPaymentPath);
    move_uploaded_file($_FILES['deedOfSales']['tmp_name'], $deedOfSalesPath);
    move_uploaded_file($_FILES['authorizationLetter']['tmp_name'], $authorizationLetterPath);
    move_uploaded_file($_FILES['proofOfPayment']['tmp_name'], $proofOfPaymentPath);

    // Prepare SQL statement to insert data into lot_transfer table
    $sql = "INSERT INTO `lot_transfer` (`date`, `seller`, `buyer`, `owner_name`, `classification`, `address`, `location`, `contact`, `email`, `proof_of_lot_payment`, `deed_of_sales`, `authorization_letter`, `payment_method`, `proof_of_payment`, `status`) VALUES (NOW(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to the prepared statement
        $stmt->bind_param("sssssssssssss", $seller, $buyer, $ownerName, $classification, $address, $location, $contact, $email, $proofOfLotPaymentPath, $deedOfSalesPath, $authorizationLetterPath, $paymentMethod, $proofOfPaymentPath);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: Unable to insert data.";
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Error: Unable to prepare statement.";
    }
    } else {
    echo 'Invalid request method.';
    }

    // Close the database connection
    $conn->close();
    ?>

