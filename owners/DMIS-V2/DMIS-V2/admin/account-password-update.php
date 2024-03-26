<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require ('dbconnect.php');

$user_id            = $_POST['user_id'];
$password           = $db->addqoute($_POST['new_password']);


    $data = array(
        'password' => $password,
    );

    $update = $db->update('admin', $data, "user_id=$user_id");

    if ($db->affected_rows >= 0) {
        $result = array(
            'status' => 'Success',
            'message' => 'Password has been successfully updated.'
        );
    } else {
        $result = array(
            'status' => 'Failed',
            'message' => 'Failed to update password.'
        );
    }


echo json_encode($result);
