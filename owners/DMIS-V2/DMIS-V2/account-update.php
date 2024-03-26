<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require('admin/dbconnect.php');

$data = array();
foreach ($_POST as $key => $value) {
    if ($key != 'submitted' && $key != 'client_id' && $key != 'current_password') {
        $data[$key] = $db->addqoute($value);
    }
}

$immediate_family_id = $_POST['client_id'];

$clients = $db->result('immediate_family', "immediate_family_id!=$immediate_family_id");
$exist = false;

if (isset($_POST['fullname'])) {
    foreach ($clients as $client) {
        if (strtolower($client->fullname) == strtolower($_POST['fullname'])) {
            $exist = true;
            break;
        }
    }
}

if ($exist) {
    $result = array(
        'status' => 'Exist',
        'message' => 'Full name is already exist.'
    );
} else {

    if (isset($_POST['password'])) {
        $passwordExist = $db->is_exist('immediate_family', "immediate_family_id=$immediate_family_id AND password='" . $_POST['current_password'] . "'");

        if (!$passwordExist) {
            $result = array('status' => 'Error', 'message' => "Incorrect current password.");
        } else {

            $update = $db->update('immediate_family', $data, "immediate_family_id=$immediate_family_id");

            if ($db->affected_rows >= 0) {
                $result = array('status' => 'Success', 'message' => 'Account successfully updated.',);
            } else {
                $result = array('status' => 'Failed', 'message' => "Failed to update account.");
            }
        }

    } else {

        $update = $db->update('immediate_family', $data, "immediate_family_id=$immediate_family_id");

        if ($db->affected_rows >= 0) {
            $result = array('status' => 'Success', 'message' => 'Account successfully updated.',);
        } else {
            $result = array('status' => 'Failed', 'message' => "Failed to update account.");
        }

    }

}

echo json_encode($result);



