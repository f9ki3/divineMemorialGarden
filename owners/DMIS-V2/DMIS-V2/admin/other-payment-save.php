<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require('dbconnect.php');

$deceased_id                                    = $_POST['deceased_id'];
$other_payment                                  = $_POST['other_payment'];
$fees                                           = $_POST['fees'];
$or_number                                      = $_POST['or_number'];
$total_other_payment                            = $_POST['total_other_payment'];
$date_paid                                      = $db->addqoute(date('Y-m-d'));

$particular = '';

for ($i=0; $i<sizeof($other_payment); $i++) {
    $particular .= $other_payment[$i] . ' (' . number_format($fees[$i], 2) . ')<br/>';
}

$data2 = array(
    'date_paid' => $date_paid,
    'deceased_id' => $deceased_id,
    'particular' => $db->addqoute($particular),
    'amount' => $total_other_payment,
    'or_number' => $db->addqoute($or_number)
);

$insert = $db->insert('payments', $data2);

if ($insert) {

    $result = array(
        'status' => 'Success',
        'message' => 'Saving of payment successful.'
    );

} else {
    $result = array(
        'status' => 'Failed',
        'message' => 'Error saving payment.'
    );
}

echo json_encode($result);
