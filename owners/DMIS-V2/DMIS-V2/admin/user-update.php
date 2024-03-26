<?php

if (!isset($_POST['submitted'])) {
    die('Error using this file.');
}

require('dbconnect.php');

$user_id = $_POST['user_id'];

$fullname = $db->addqoute($_POST['name']);
$username = $db->addqoute($_POST['username']);
$user_type = $db->addqoute($_POST['user_type']);
$password = $db->addqoute($_POST['password']);

$user = $db->result('admin', "user_id!=$user_id");

$exist = false;
foreach ($user as $i) {
    if ($i->username == $_POST['username']) {
        $exist = true;
        break;
    }
}

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
            'password' => $password,
        );

        $update = $db->update('admin', $data, "user_id=$user_id");

        if ($db->affected_rows >= 0) {
            $result = array(
                'status' => 'Success',
                'message' => 'User account updated.',
            );
        } else {
            $result = array(
                'status' => 'Failed',
                'message' => "Failed to update user account."
            );
        }


}

echo json_encode($result);
