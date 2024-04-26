<?php
// Assume there is a database connection established
include '../config/config.php';

// Retrieve data sent via POST request
$service_title = $_POST['service_title'];
$service_fee = $_POST['service_fee'];
$service_description = $_POST['service_description'];

// Get current date and time
$service_date = date('Y-m-d H:i:s');

// Define the target directory for uploads
$target_dir = "../uploads/";

// Retrieve the file information
$service_cover_name = basename($_FILES["service_cover"]["name"]);
$target_file = $target_dir . $service_cover_name;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["service_cover"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["service_cover"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["service_cover"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["service_cover"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Prepare the SQL query
$query = "INSERT INTO service_type (service_date_added, service_name, service_fee, service_description, service_cover, service_type_status) VALUES (?, ?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = mysqli_prepare($conn, $query);

// Define the value for service_type_status (assuming it's a default value)
$service_type_status = 1; // Assuming default status is 1

// Bind parameters
mysqli_stmt_bind_param($stmt, "ssdssi", $service_date, $service_title, $service_fee, $service_description, $service_cover_name, $service_type_status);

// Execute the statement
$result = mysqli_stmt_execute($stmt);

if ($result) {
    // If insertion is successful
    echo "Service information added successfully";
} else {
    // If there's an error with the query
    echo "Error adding service information: " . mysqli_error($conn);
}

// Close the statement
mysqli_stmt_close($stmt);

// Close the database connection
mysqli_close($conn);
?>
