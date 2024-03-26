<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require('dbconnect.php');

$data = array();
foreach ($_POST as $key => $value) {
    if ($key != 'submitted' && $key != 'client_id' && $key != 'current_password') {
        $data[$key] = $db->addqoute($value);
    }
}

$immediate_family_id = $_POST['client_id'];

$clients = $db->result('immediate_family', "immediate_family_id!=$immediate_family_id");
$exist = false;

$error = '';

if (isset($_POST['fullname'])) {
    foreach ($clients as $client) {
        if (strtolower($client->fullname) == strtolower($_POST['fullname'])) {
            $exist = true;
            $error = 'name';
            break;
        }

        if (strtolower($client->username) == strtolower($_POST['username'])) {
            $exist = true;
            $error = 'username';
            break;
        }
    }
}

if ($exist) {
    $result = array(
        'status' => 'Exist',
        'message' => $error == 'name' ? 'Full name is already exist.':'Username is already used'
    );
} else {


        $update = $db->update('immediate_family', $data, "immediate_family_id=$immediate_family_id");

        if ($db->affected_rows >= 0) {
            $result = array('status' => 'Success', 'message' => 'Client successfully updated.',);
        } else {
            $result = array('status' => 'Failed', 'message' => "Failed to update client.");
        }


}

echo json_encode($result);



