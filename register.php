<?php include 'session.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('assets/img/divine_background.png'); /* Replace 'your-background-image.jpg' with the path to your image */
            background-size: cover; /* Ensure the background image covers the entire body */
            background-repeat: no-repeat; /* Prevent the background image from repeating */
            background-position: center; /* Center the background image */
            margin: 0; /* Resetting default margin */
            padding: 0; /* Resetting default padding */
            height: 100vh; /* Making sure the background covers the entire viewport height */
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative; /* Position the overlay layer relative to the body */
        }
        .overlay {
            position: absolute; /* Position the overlay layer absolutely within the body */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* This creates a semi-transparent black overlay */
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

<div class="overlay">
    <div class="h-50 w-25">
        <h2 class="fw-bolder text-light">Register Account</h2>
        <form id="login_form">
            <div class="mb-3">
                <label for="email" class="form-label text-light">Email</label>
                <input type="email" id="email" class="form-control" required placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-light">Password</label>
                <input type="password" id="password" class="form-control" required placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label text-light">Confirm Password</label>
                <input type="password" id="cpassword" class="form-control" required placeholder="Confirm your password">
            </div>
            <button type="submit" id="loading" class="btn btn-success w-100 disabled" style="display: none">
                <div class="spinner-grow spinner-grow-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </button>
            <button id="register_btn" class="btn btn-success w-100">Register</button>
            <div class="alert mt-3 alert-danger text-center error" role="alert" style="display: none">
                Please check your login Credentials
            </div>
            <div class="alert mt-3 text-center d-flex justify-content-between" >
                <a href="homepage" style="text-decoration: none; color: white">Home</a>
                <a href="login" style="text-decoration: none; color: white">Login</a>
                <a href="contact" style="text-decoration: none; color: white">Contacts</a>
                <a href="about_us" style="text-decoration: none; color: white">About Us</a>
            </div>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="jquery/register.js"></script>






</body>
</html>
