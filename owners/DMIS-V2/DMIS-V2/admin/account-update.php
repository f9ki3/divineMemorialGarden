<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require ('dbconnect.php');

$user_id            = $_POST['user_id'];
$fullname           = $db->addqoute($_POST['fullname']);
$username           = $db->addqoute($_POST['username']);

$admins = $db->result('admin', "user_id!=$user_id");
$exist = false;

foreach ($admins as $r) {
    if (strtolower($r->username) == strtolower($_POST['username']) && strtolower($r->fullname) == strtolower($_POST['fullname'])) {
        $exist = true;
        break;
    }
}

if ($exist) {
    $result = array(
        'status' => 'Exist',
        'message' => 'Admin is already exist.'
    );
} else {

    $data = array(
        'account_name' => $fullname,
        'username' => $username,
    );

    $update = $db->update('admin', $data, "user_id=$user_id");

    if ($db->affected_rows >= 0) {
        $result = array(
            'status' => 'Success',
            'message' => 'Admin has been successfully updated.'
        );
    } else {
        $result = array(
            'status' => 'Failed',
            'message' => 'Failed to update information.'
        );
    }

}

echo json_encode($result);