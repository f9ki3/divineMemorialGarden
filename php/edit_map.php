<?php
// Get the PHP ID from the URL query parameter
$id = $_GET['id'];

// Directory to save uploaded files
$uploadDirectory = '../uploads/';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // Ensure the uploads directory exists
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }

    // Move uploaded file to the uploads directory
    $uploadedFilePath = $uploadDirectory . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $uploadedFilePath)) {
        // File upload successful, now update database with file details
        // Perform database update (replace this with your actual database update logic)
        // Example: Updating a database table with filename and associated ID
        // You may use PDO or mysqli to interact with your database

        // Example with PDO
        $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
        $stmt = $pdo->prepare('UPDATE your_table SET filename = :filename WHERE id = :id');
        $stmt->execute([
            'filename' => basename($file['name']),
            'id' => $id
        ]);

        // Send a response back to the client (JavaScript)
        echo json_encode(['success' => true, 'filename' => basename($file['name'])]);
    } else {
        // File upload failed
        echo json_encode(['success' => false, 'error' => 'Failed to move uploaded file']);
    }
} else {
    // Invalid request method or no file uploaded
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}
?>
