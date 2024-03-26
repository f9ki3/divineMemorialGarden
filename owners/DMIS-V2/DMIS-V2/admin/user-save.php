<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require ('token-generator.php');
require ('dbconnect.php');

$fullname           = $db->addqoute($_POST['name']);
$username           = $db->addqoute($_POST['username']);
$user_type          = $db->addqoute($_POST['user_type']);
$password           = $db->addqoute($_POST['password']);
$token              = $db->addqoute(getToken(25));

$exist = $db->is_exist('admin', "username=$username");
if ($exist) {
    $result = array(
        'status' => 'Exist',
        'message' => 'Username is already used.'
    );
} else {

    $data = array(
        'account_name' => $fullname,
        'username' => $username,
        'user_type' => $user_type,
        'token' => $token,
        'password' => $password
    );

    $insert = $db->insert('admin', $data);
    if ($insert) {
        $result = array(
            'status' => 'Success',
            'message' => 'New user has been saved.',
        );
    } else {
        $result = array(
            'status' => 'Failed',
            'message' => 'Failed to save user.'
        );
    }

}

echo json_encode($result);
