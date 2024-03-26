<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require('dbconnect.php');

$deceased_id            = $_POST['deceased_id'];
$fullname               = $db->addqoute($_POST['fullname']);
$date_of_death          = $db->addqoute($_POST['date_of_death']);
$date_of_interment      = $db->addqoute($_POST['date_of_interment']);
$date_validity_period   = $db->addqoute($_POST['date_of_validity_period']);

$data1 = array(
    'fullname' => $fullname,
    'date_of_death' => $date_of_death,
    'date_of_interment' => $date_of_interment,
    'date_validity_period' => $date_validity_period,
);

$update = $db->update('deceased', $data1, "deceased_id=$deceased_id");
if ($db->affected_rows >= 0) {
    $result = array(
        'status' => 'Success',
        'message' => 'Deceased information updated.',
    );
} else {
    $result = array(
        'status' => 'Failed',
        'message' => 'Failed to update deceased information.'
    );
}

echo json_encode($result);
