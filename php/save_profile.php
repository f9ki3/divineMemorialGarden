<?php
// Check if request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'profileImage' and 'username' fields are present in the POST request
    if (isset($_FILES['profileImage'], $_POST['username'], $_POST['visitor_id'])) {
        $uploadDirectory = '../uploads/'; // Directory where uploaded files will be stored
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif']; // Allowed file extensions

        // Retrieve form data
        $file = $_FILES['profileImage'];
        $user_name = $_POST['username'];
        $visitor_id = $_POST['visitor_id'];

        // Validate required fields
        if (empty($user_name) || empty($visitor_id)) {
            http_response_code(400);
            echo "Error: 'username' and 'visitor_id' fields are required.";
            exit;
        }

        // Validate uploaded file
        if ($file['error'] === UPLOAD_ERR_OK) {
            $fileName = basename($file['name']);
            $fileTmpName = $file['tmp_name'];

            // Check file extension
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            if (!in_array($fileExtension, $allowedExtensions)) {
                http_response_code(400);
                echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
                exit;
            }

            // Generate a unique file name
            $newFileName = uniqid() . '_' . $fileName;
            $uploadPath = $uploadDirectory . $newFileName;

            // Move uploaded file to the upload directory
            if (move_uploaded_file($fileTmpName, $uploadPath)) {
                // Update user profile in the database
                include '../config/config.php'; // Assuming $conn is defined in config.php

                try {
                    // Prepare and execute the SQL query using prepared statements
                    $stmt = $conn->prepare("UPDATE users SET user_name = ?, user_profile = ? WHERE id = ?");
                    $stmt->bind_param("ssi", $user_name, $newFileName, $visitor_id);
                    $stmt->execute();

                    // Output success message
                    echo "Profile image and username saved successfully!";
                } catch (Exception $e) {
                    http_response_code(500);
                    echo "Error: Failed to update user data - " . $e->getMessage();
                }
            } else {
                http_response_code(500);
                echo "Error: Failed to upload file.";
            }
        } else {
            http_response_code(400);
            echo "Error: File upload failed with error code {$file['error']}.";
        }
    } else {
        http_response_code(400);
        echo "Error: 'profileImage', 'username', and 'visitor_id' fields are required.";
    }
} else {
    http_response_code(405);
    echo "Error: Method not allowed.";
}
?>
