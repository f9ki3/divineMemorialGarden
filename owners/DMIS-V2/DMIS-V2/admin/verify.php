<?php

    require('dbconnect.php');

    $username = $db->addqoute($_POST['username']);
    $password = $db->addqoute($_POST['password']);

    $results = $db->result('admin', "username=$username AND password=$password");
    if (sizeof($results) > 0) {
        session_start();
        $admin = $results[0];
        $token = $admin->token;
        $_SESSION['token'] = array(
            'token' => $token,
            'isAdminLogin' => 1
        );
        header('location: home.php');
    } else {
        header('location: index.php?login=error');
    }
