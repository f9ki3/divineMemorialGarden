<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require('dbconnect.php');

$immediate_family_id    = $_POST['immediate_family_id'];
$fullname               = $db->addqoute($_POST['fullname']);
$date_of_death          = $db->addqoute($_POST['date_of_death']);
$date_of_interment      = $db->addqoute($_POST['date_of_interment']);


$data1 = array(
    'immediate_family_id' => $immediate_family_id,
    'fullname' => $fullname,
    'date_of_death' => $date_of_death,
    'date_of_interment' => $date_of_interment
);

$insert = $db->insert('deceased', $data1);
if ($insert) {
    $result = array(
        'status' => 'Success',
        'message' => 'Deceased information saved.',
    );
} else {
    $result = array(
        'status' => 'Failed',
        'message' => 'Failed to saved deceased information.'
    );
}

echo json_encode($result);
