<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require ('dbconnect.php');

$immediate_family_id = $_POST['immediate_family_id'];

$data = array(
    'remarks' => $db->addqoute('Verified'),
);

$update = $db->update('immediate_family', $data, "immediate_family_id=$immediate_family_id");

if ($db->affected_rows >= 0) {
    $result = array(
        'status' => 'ok',
        'message' => 'Client verified successfully.',
    );
} else {
    $result = array(
        'status' => 'Error',
        'message' => 'Error verifying client.'
    );
}

echo json_encode($result);