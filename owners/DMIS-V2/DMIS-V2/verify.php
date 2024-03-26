<?php

    require('admin/dbconnect.php');

    $username = $db->addqoute($_POST['username']);
    $password = $db->addqoute($_POST['password']);

    $results = $db->result('immediate_family', "username=$username AND password=$password");
    if (sizeof($results) > 0) {
        session_start();
        $client = $results[0];
        $token = $client->token;
        $_SESSION['token'] = array(
            'token' => $token,
            'isClientLogin' => 1
        );
        header('location: home.php');
    } else {
        header('location: index.php?login=error');
    }
