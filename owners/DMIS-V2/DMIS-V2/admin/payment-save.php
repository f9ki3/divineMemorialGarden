<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require('dbconnect.php');

$deceased_id                                    = $_POST['deceased_id'];
$burialOption                                   = $_POST['burialOption'];
$lot_cluster                                    = $_POST['lot_cluster'];
$block_type_category                            = $_POST['block_type_category'];
$level_layer                                    = $_POST['level_layer'];
$level_number                                   = $_POST['level_number'];

$has_purchased_lot                              = $_POST['has_purchased_lot'];
$burial_permit_fee                              = $_POST['burial_permit_fee'];
$excavate_and_construction                      = $_POST['excavate_and_construction'];

$lot_number                                     = $_POST['lot_number'];
$or_number                                      = $_POST['or_number'];

$burial_purchase_lot_amount                     = $_POST['burial_purchase_lot_amount'];
$excavation_and_construction_amount             = $_POST['excavation_and_construction_amount'];

$total_amount                                   = $_POST['total_amount'];
$date_paid                                      = $db->addqoute(date('Y-m-d'));

$particular = '';

if ($burial_permit_fee == 'Yes') {
    $particular .= 'Burial Permit Fee (500.00)<br/>';
}

if ($has_purchased_lot == 'Yes') {
    $particular .= 'Purchased Burial Lot (' . $burial_purchase_lot_amount . ')<br/>';
}

if ($excavate_and_construction == 'Yes') {
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
        'deceased_id' => $deceased_id,
        'burial_option' => $db->addqoute($burialOption),
        'lot_cluster' => $db->addqoute($lot_cluster),
        'block_type_category' => $db->addqoute($block_type_category),
        'level_layer' => $db->addqoute($level_layer),
        'level_number' => $db->addqoute($level_number),
        'lot_number' => $db->addqoute($lot_number),
        'has_purchased_lot' => $db->addqoute($has_purchased_lot),
        'burial_permit_fee' => $db->addqoute($burial_permit_fee),
        'excavate_and_construction' => $db->addqoute($excavate_and_construction),
        'lot_number' => $db->addqoute($lot_number)
    );

    $insert1 = $db->insert('facility', $data1);
    if ($insert1) {
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
