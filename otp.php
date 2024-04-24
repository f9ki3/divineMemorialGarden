<?php include 'session.php'?>
<?php
include 'session.php'; // Include session handling logic if needed

// Retrieve the 'email' parameter from the URL
$email = $_GET['email'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!--Alertify JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <!-- 
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>

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
        <h1 class="fw-bolder text-light">OTP</h1>
            <div class="mb-3">
                <label for="otp" class="form-label text-light">Please Enter 4 Digit OTP send to your email</label>
                <input type="text" required id="otp" class="text-center form-control" placeholder="0000">
            </div>
            <button type="submit" id="loading" class="btn btn-success w-100 disabled" style="display: none">
                <div class="spinner-grow spinner-grow-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </button>
            <button type="submit" disabled id="verify_btn" class="btn btn-success w-100">Verify</button>
            <div class="alert mt-3 alert-danger text-center error" role="alert" style="display: none">
                Invallid OTP
            </div>
            <div class="w-100 mt-2 justify-content-center d-flex">
                <p id="countdown" class="text-light  m-0 "></p>
            </div>
            <hr class="text-light">
            <div class="w-100 mt-2 justify-content-center d-flex">
                <p class="text-light me-2">Did'nt Received the code?</p>
                <a id="resend_btn" class="text-primary">Resend it</a>
            </div>
            
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const countdownElement = document.getElementById('countdown');
        const otpInput = document.getElementById('otp');
        const verifyBtn = document.getElementById('verify_btn');
        const errorAlert = document.querySelector('.alert-danger.error');
        let countdownInterval; // Variable to hold the interval ID

        function startCountdown(durationSeconds) {
            let remainingTime = durationSeconds;

            countdownInterval = setInterval(function() {
                if (remainingTime <= 0) {
                    clearInterval(countdownInterval);
                    countdownElement.textContent = 'Resend OTP Now';
                    document.getElementById('resend_btn').disabled = false; // Enable resend button
                } else {
                    const minutes = Math.floor(remainingTime / 60);
                    const seconds = remainingTime % 60;
                    countdownElement.textContent = `Resend OTP in ${minutes}m ${seconds}s`;
                    remainingTime--;
                }
            }, 1000); // Update every 1 second (1000 milliseconds)
        }

        // Initial countdown on page load
        startCountdown(180);

        // Click event handler for resend button
        document.getElementById('resend_btn').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default behavior of anchor tag (i.e., following the href)

            const email = "<?php echo $email; ?>"; // Get the email (replace with actual source)

            // Disable resend button during countdown
            this.disabled = true;

            // Display success notification
            alertify.set('notifier', 'position', 'bottom-left');
            alertify.success('Resend OTP Success');

            // Start countdown for 180 seconds (3 minutes)
            startCountdown(180);

            // Send AJAX request to resend OTP
            $.ajax({
                type: 'POST',
                url: 'php/resend_otp.php',
                data: { email: email },
                success: function(response) {
                    console.log('OTP resent successfully');
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    alert('Error occurred while resending OTP');
                }
            });
        });

        // Input event listener for OTP input field
        otpInput.addEventListener('input', function() {
            let otpValue = otpInput.value.trim().replace(/\D/g, '').slice(0, 4);
            otpInput.value = otpValue;
            verifyBtn.disabled = otpValue.length !== 4 || !(/^\d{4}$/.test(otpValue));
        });

        // Click event handler for OTP verification button
        verifyBtn.addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('loading').style.display = 'block';
            verifyBtn.style.display = 'none';

            const otpValue = otpInput.value.trim();

            if (otpValue.length !== 4 || !(/^\d{4}$/.test(otpValue))) {
                errorAlert.textContent = 'Please enter a valid 4-digit numeric OTP.';
                errorAlert.style.display = 'block';
                document.getElementById('loading').style.display = 'none';
                verifyBtn.style.display = 'block';
                return;
            }

            // Clear any previous error message
            errorAlert.style.display = 'none';

            // Send OTP to PHP script using Fetch API
            fetch('verify_otp.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'otp=' + encodeURIComponent(otpValue),
            })
            .then(response => {
                if (response.ok) {
                    return response.text();
                } else {
                    throw new Error('Network response was not ok.');
                }
            })
            .then(response => {
                if (response === 'valid') {
                    console.log('OTP is valid!');
                    document.getElementById('verify_btn').disabled = true;
                    document.getElementById('loading').style.display = 'none';
                    verifyBtn.style.display = 'block';
                    // Display success notification
                    setTimeout(function() {
                        alertify.set('notifier', 'position', 'bottom-left');
                        alertify.success('Verification Success');
                            // Handle valid OTP response (e.g., redirect to another page)
                            setTimeout(function() {
                            // Handle valid OTP response (e.g., redirect to another page)
                            window.location.href = "login";
                        }, 2000);
                    }, 2000);
                    
                } else {
                    console.log('Invalid OTP!');
                    errorAlert.textContent = 'Invalid OTP. Please try again.';
                    errorAlert.style.display = 'block';
                    document.getElementById('loading').style.display = 'none';
                    verifyBtn.style.display = 'block';
                }
            })
            .catch(error => {
                console.error('Fetch error:', error);
                errorAlert.textContent = 'Error occurred during OTP verification. Please try again.';
                errorAlert.style.display = 'block';
                document.getElementById('loading').style.display = 'none';
                verifyBtn.style.display = 'block';
            });
        });
    });
</script>






</body>
</html>
