<?php
// Assume there is a database connection established
include '../config/config.php';

// Retrieve data sent via POST request
$c_name = $_POST['c_name'];
$address = $_POST['address'];
$municipal = $_POST['municipal'];
$province = $_POST['province'];
$barangay = $_POST['barangay'];
$contact = $_POST['contact'];
$link = $_POST['link'];
$email = $_POST['email'];

// Prepare the SQL query
$query = "UPDATE maintenance 
          SET 
              company_name = ?,
              address = ?,
              municipal = ?,
              province = ?,
              barangay = ?,
              contact = ?,
              link = ?,
              email = ?
          WHERE 
              id = 3";

// Prepare the statement
$stmt = mysqli_prepare($conn, $query);

// Bind parameters
mysqli_stmt_bind_param($stmt, "sssssiss", $c_name, $address, $municipal, $province, $barangay, $contact, $link, $email);

// Execute the statement
$result = mysqli_stmt_execute($stmt);

if ($result) {
    // If update is successful
    echo "Contact information updated successfully";
} else {
    // If there's an error with the query
    echo "Error updating contact information: " . mysqli_error($conn);
}

// Close the statement
mysqli_stmt_close($stmt);

// Close the database connection
mysqli_close($conn);
?>
