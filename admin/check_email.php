<?php
// Assuming you have a database connection established

// Retrieve email from POST data
$email = $_POST['email'];

// Check if email exists in your database
// Example: assuming 'users' table has 'email' field
$stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
$stmt->execute([$email]);

if ($stmt->fetchColumn() > 0) {
    // Email exists
    echo 'exists';
} else {
    // Email does not exist
    echo 'not_exists';
}
?>
