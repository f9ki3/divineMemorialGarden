<?php require ('login-check.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
            require ('constants.php');
            echo PROJECT_NAME . ' - CLIENT PAGE';
        ?>
    </title>

    <link rel="stylesheet" href="includes/bootstrap-5.0.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="includes/css/styles.css" />
    <link rel="stylesheet" href="includes/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="includes/sweetalert2/sweetalert2.min.css" />
    <link rel="stylesheet" href="includes/alertify/alertify.min.css"/>
    <link rel="stylesheet" href="includes/alertify/default.min.css"/>
    <link rel="stylesheet" href="includes/jquery/jquery-ui.css" />


    <script src="includes/jquery/jquery-3.6.0.min.js"></script>
    <script src="includes/sweetalert2/sweetalert2.min.js"></script>

</head>
<body class="body">
    <nav class="navbar navbar-expand-lg navbar-dark"style="background-color:#009B4D">
        <div class="container py-2">
            <div class="navbar-brand mb-0 h1">
                <span><?= PROJECT_NAME; ?></span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" id="mnuHome" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="mnuInquiry" href="inquiries.php">Inquiry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="mnuRecords" href="records.php">Records</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="mnuMap" href="map.php">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="mnuAccount" href="account-setting.php">Account Setting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="background-color:#009B4D;height:40px"></div>