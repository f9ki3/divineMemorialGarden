<?php

if (!isset($_POST['submitted'])) {
    die('Error using this file.');
}

require('../dbconnect.php');

$user_id = $_POST['user_id'];
$new_password = $db->addqoute($_POST['new_password']);

$data = array(
    'password' => $new_password
);

$update = $db->update('salon_users', $data, "user_id=$user_id");

if ($db->affected_rows >= 0) {
    $result = array(
        'status' => 'Success',
        'message' => 'Password changed successfully.',
    );
} else {
    $result = array(
        'status' => 'Failed',
        'message' => "Failed to change password."
    );
}

echo json_encode($result);

