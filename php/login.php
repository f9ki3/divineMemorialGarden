<?php
// Start a session
session_start();

include ("../config/config.php");

// Check if the POST data is set
if(isset($_POST['uname'], $_POST['pass'])) {
    // Get the posted username and password
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    // Prepare a SQL statement to check if the username and password exist
    $sql = "SELECT * FROM users WHERE user_name = ? AND user_password = ? AND user_status = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        // Handle error, perhaps by logging it or showing a message to the user
        die('Error: ' . htmlspecialchars($conn->error));
    }

    // Bind parameters
    $status = 0; // Assuming status is an integer
    $stmt->bind_param("ssi", $username, $password, $status);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if a row was returned
    if ($result->num_rows > 0) {
        // Fetch the user data
        $row = $result->fetch_assoc();

        // Set session variables
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_fname'] = $row['user_fname'];
        $_SESSION['user_lname'] = $row['user_lname'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_contact'] = $row['user_contact'];
        $_SESSION['user_address'] = $row['user_address'];
        $_SESSION['user_profile'] = $row['user_profile'];
        $_SESSION['user_name'] = $username;
        $_SESSION['user_type'] = $row['user_type'];
        $_SESSION['loggedin'] = true;

        // Check user type
        if ($row['user_type'] == 0) {
            // Respond with '1' to indicate successful login for user type 0
            echo '1';
        } elseif ($row['user_type'] == 1) {
            // Respond with '2' to indicate successful login for user type 1
            echo '2';
        } else {
            // Respond with '0' for unknown user type
            echo '0';
        }
    } else {
        // Respond with '0' to indicate failed login
        echo '0';
    }
} else {
    // Respond with '0' to indicate failed login
    echo '0';
}

// Close the connection
$conn->close();
?>
