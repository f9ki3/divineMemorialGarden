<?php
// Start a session
session_start();

// Include database configuration
include("../config/config.php");

// Check if the POST data is set
if (isset($_POST['uname'], $_POST['pass'])) {
    // Get the posted username and password
    $username = $_POST['uname'];
    $password = hash('sha256', $_POST['pass']); // Hash the password

    // Prepare a SQL statement to check if the username and password exist
    $sql = "SELECT * FROM users WHERE (user_name = ? OR user_email = ?) AND user_password = ? AND user_status = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        // Handle error, perhaps by logging it or showing a message to the user
        die('Error: ' . htmlspecialchars($conn->error));
    }

    // Bind parameters
    $status = 0; // Assuming user_status is an integer (changed to 1 for active users)
    $stmt->bind_param("sssi", $username, $username, $password, $status);

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
        $_SESSION['user_property_id'] = $row['user_property_id'];
        $_SESSION['loggedin'] = true;

        // Check user type
        if ($row['user_type'] == 0) {
            // Respond with '1' to indicate successful login for user type 0
            echo '1';
        } elseif ($row['user_type'] == 1) {
            if ($row['user_started'] == 1) {
                echo '6'; // Successful login for user type 2 with OTP verified
            } else {
                echo '2'; // Successful login for user type 2, but OTP not verified
            }
        } elseif ($row['user_type'] == 2) {
            // Respond based on OTP status (assuming OTP status is a separate verification step)
            if ($row['user_otp_status'] == 1) {
                if ($row['user_started'] == 1) {
                    echo '7'; // Successful login for user type 2 with OTP verified
                } else {
                    echo '3'; // Successful login for user type 2, but OTP not verified
                }
            } else {
                echo '4'; // Successful login for user type 2, but OTP not verified
            }
        } else {
            // Respond with '0' for unknown user type
            echo '0';
        }
    } else {
        // Respond with '0' to indicate failed login
        echo '0';
    }

    // Close the result set
    $result->close();
    // Close the statement
    $stmt->close();
} else {
    // Respond with '0' to indicate failed login
    echo '0';
}

// Close the connection
$conn->close();
?>
