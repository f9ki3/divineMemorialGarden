<?php

if (!isset($_POST['submitted'])) {
    die('Error in accessing this file.');
}

require ('dbconnect.php');

$user_id     = $_POST['user_id'];
$delete = $db->delete('admin', "user_id=$user_id");
if ($delete) {
    $result = array(
        'status' => 'Success',
        'message' => 'User has been deleted.',
    );
} else {
    $result = array(
        'status' => 'Failed',
        'message' => 'Failed to delete user.'
    );

}

echo json_encode($result);
