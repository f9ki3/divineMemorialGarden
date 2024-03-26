<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'dbcemetery');

// Check if the form has been submitted
if (isset($_POST['fullname']) && isset($_POST['date_of_birth'])) {
	// Get the information from the form
	$name = mysqli_real_escape_string($conn, $_POST['fullname']);
	$email = mysqli_real_escape_string($conn, $_POST['date_of_birth']);

	// Update the database with the new information
	$query = "UPDATE users SET name='$name', date_of_birth='$email' WHERE id=1";
	mysqli_query($conn, $query);

	// Redirect back to the original page
	header('Location: DMIS-V2/admin/index.php');
	exit();
}

// Close the database connection
mysqli_close($conn);
?>
