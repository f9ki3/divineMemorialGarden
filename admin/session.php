<?php
// Start a session
session_start();

// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // User is logged in, display the landing page content
    $username = $_SESSION['user_name'];
    $id = $_SESSION['id'];
    $fname = $_SESSION['user_fname'];
    $lname = $_SESSION['user_lname'];
    $email = $_SESSION['user_email'];
    $contact = $_SESSION['user_contact'];
    $address = $_SESSION['user_address'];
    $profile = $_SESSION['user_profile'];
} else {
    // User is not logged in, redirect to the login page
    header("Location: ../");
    exit;
}
?>
