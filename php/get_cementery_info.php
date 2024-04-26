<?php
// Include your database connection file here
include '../config/config.php';

// Fetch cemetery information from the database
$sql = "SELECT * FROM maintenance"; // Assuming your table name is cemetery_info
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);

    // Prepare data to be returned as JSON
    $data = array(
        'c_name' => $row['company_name'],
        'address' => $row['address'],
        'municipal' => $row['municipal'],
        'province' => $row['province'],
        'barangay' => $row['barangay'],
        'contact' => $row['contact'],
        'link' => $row['link'],
        'email' => $row['email']
    );
    // Return data as JSON
    echo json_encode($data);
} else {
    // Handle error
    echo json_encode(array('error' => 'Failed to fetch data'));
}

// Close database connection
mysqli_close($conn);
?>
