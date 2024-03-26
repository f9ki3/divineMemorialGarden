<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require('dbconnect.php');

$facility_id                                    = $_POST['facility_id'];
$deceased_id                                    = $_POST['deceased_id'];

$has_purchased_lot                              = $_POST['has_purchased_lot'];
$excavate_and_construction                      = $_POST['excavate_and_construction'];

$burial_purchase_lot_amount                     = $_POST['burial_purchase_lot_amount'];
$excavation_and_construction_amount             = $_POST['excavation_and_construction_amount'];

$or_number                                      = $_POST['or_number'];

$total_amount                                   = $_POST['total_amount'];
$date_paid                                      = $db->addqoute(date('Y-m-d'));

$particular = '';

if ($has_purchased_lot == 'Yes' && $burial_purchase_lot_amount > 0 ) {
    $particular .= 'Purchased Burial Lot (' . $burial_purchase_lot_amount . ')<br/>';
}

if ($excavate_and_construction == 'Yes' && $excavation_and_construction_amount > 0) {
    $particular .= 'Excavation and Construction of Niche (' . $excavation_and_construction_amount . ')';
}

$data2 = array(
    'date_paid' => $db->addqoute(date('Y-m-d')),
    'deceased_id' => $deceased_id,
    'particular' => $db->addqoute($particular),
    'amount' => $total_amount,
    'or_number' => $db->addqoute($or_number)
);

$insert = $db->insert('payments', $data2);

if ($insert) {

    $data1 = array(
        'has_purchased_lot' => $db->addqoute($has_purchased_lot),
        'excavate_and_construction' => $db->addqoute($excavate_and_construction),
    );

    $update = $db->update('facility', $data1, "facility_id=$facility_id");
    if ($db->affected_rows >= 0) {
        $result = array(
            'status' => 'Success',
            'message' => 'Saving facility and payment successful.'
        );
    } else {
        $result = array(
            'status' => 'Failed',
            'message' => 'Error saving facility and payment.'
        );
    }

} else {
    $result = array(
        'status' => 'Failed',
        'message' => 'Error saving payment.'
    );
}

echo json_encode($result);
