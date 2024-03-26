<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require ('admin/dbconnect.php');

$contact_number     = $db->addqoute($_POST['contact_number']);

$exist = $db->is_exist('immediate_family', "contact_no=$contact_number AND remarks='Verified'");
if (!$exist) {

    $result = array(
        'status' => 'Invalid',
        'message' => 'The specified contact number does not exist.'
    );

} else {

    $client = $db->row('immediate_family', "contact_no=$contact_number AND remarks='Verified'");
    $result = array(
        'status' => 'Success',
        'message' => 'Your password in JMEEDO Website is: ' .$client->password
    );

}

echo json_encode($result);
