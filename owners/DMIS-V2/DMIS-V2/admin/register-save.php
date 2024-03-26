<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require('token-generator.php');
require('dbconnect.php');

$fullname               = $db->addqoute($_POST['fullname']);
$contact_no             = $db->addqoute($_POST['contact_no']);
$address                = $db->addqoute($_POST['address']);
$registration_date      = $db->addqoute(date('Y-m-d'));
$token                  = $db->addqoute(getToken(25));

$deceased_fullname      = $db->addqoute($_POST['deceased_fullname']);
$date_of_death          = $db->addqoute($_POST['date_of_death']);
$date_of_interment      = $db->addqoute($_POST['date_of_interment']);

$username               = $db->addqoute($_POST['username']);
$password               = $db->addqoute($_POST['password']);

$exist = $db->is_exist('immediate_family', "fullname=$fullname");
if ($exist) {
    $result = array(
        'status' => 'Exist',
        'message' => 'Full name is already exist.'
    );
} else {

    $exist1 = $db->is_exist('immediate_family', "contact_no=$contact_no");
    if ($exist1) {
        $result = array(
            'status' => 'Exist',
            'message' => 'Contact number is already used.'
        );
    } else {

        $data = array(
            'fullname' => $fullname,
            'address' => $address,
            'contact_no' => $contact_no,
            'registration_date' => $registration_date,
            'username' => $username,
            'password' => $password,
            'remarks' => $db->addqoute('Verified'),
            'token' => $token,
        );

        $insert = $db->insert('immediate_family', $data);
        if ($insert) {
            $immediate_family_id = $db->insert_id;
            $data1 = array(
                'immediate_family_id' => $immediate_family_id,
                'fullname' => $deceased_fullname,
                'date_of_death' => $date_of_death,
                'date_of_interment' => $date_of_interment
            );
            $insert1 = $db->insert('deceased', $data1);
            $result = array(
                'status' => 'Success',
                'message' => 'Registration successful. You may now proceed to login.',
            );
        } else {
            $result = array(
                'status' => 'Failed',
                'message' => 'Failed to saved registration.'
            );
        }
    }
}

echo json_encode($result);
