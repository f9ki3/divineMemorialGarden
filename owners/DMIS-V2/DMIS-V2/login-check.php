<?php

session_start();
require('admin/dbconnect.php');

if (!isset($_SESSION['token'])) {
    header('location: index.php');
} else {

    $token = $_SESSION['token'];
    if ($token['isClientLogin'] != 1) {
        header('location: index.php');
    } else {
        $token = $_SESSION['token']['token'];
        $client_id = $db->addqoute($token);

        $results = $db->result('immediate_family', "token=$client_id");
        if (sizeof($results) < 1) {
            header('location: index.php');
        } else {
            $client = $results[0];
        }
    }

}