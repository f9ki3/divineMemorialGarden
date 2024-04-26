<?php
// Include your database connection file here
include '../config/config.php';

// Fetch cemetery information from the database
$sql = "SELECT * FROM service_type"; // Assuming your table name is service_type
$result = mysqli_query($conn, $sql);

if ($result) {
    $data = array(); // Initialize an empty array to store data

    // Fetch all rows and store them in the $data array
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = array(
            'service_name' => $row['service_name'],
            'service_fee' => $row['service_fee'],
            'service_description' => $row['service_description'],
            'service_cover' => $row['service_cover']
        );
    }

    // Return data as JSON
    echo json_encode($data);
} else {
    // Handle error
    echo json_encode(array('error' => 'Failed to fetch data'));
}

// Close database connection
mysqli_close($conn);
?>
