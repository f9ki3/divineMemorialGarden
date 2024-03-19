<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <h1 class="fw-bolder text-light">Divine Memorial</h1>
        <form id="login_form">
            <div class="mb-3">
                <label for="username" class="form-label text-light">Username</label>
                <input type="text" id="username" class="form-control" placeholder="Enter your username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-light">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Enter your password">
            </div>
            <button type="submit" id="loading" class="btn btn-success w-100 disabled" style="display: none">
                <div class="spinner-grow spinner-grow-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </button>
            <button type="submit" id="login_btn" class="btn btn-success w-100">Login</button>
            <div class="alert mt-3 alert-danger text-center error" role="alert" style="display: none">
                Please check your login Credentials
            </div>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#username, #password').on('keyup', function(event) {
            if (event.key === 'Enter') {
                $('#login_btn').click();
                
            }
        });

        $("#login_form").submit(function(event){
            event.preventDefault();
            var $username = $("#username").val();
            var $password = $("#password").val();

            $('.error').hide();
            $('#login_btn').hide();

            $.ajax({
                type: "POST",
                url: "php/login.php",
                data: {
                    uname: $username,
                    pass: $password
                },
                success: function(response){
                    if(response === "1") {
                        $('#loading').show();
                        setTimeout(function() {
                            $('#loading').hide();
                            window.location.href = '/divineMemorialGarden/admin/dashboard';
                        }, 3000);
                    } else {
                        $('#loading').show();
                        setTimeout(function() {
                            $('#loading').hide();
                            $('.error').show();
                            $('#login_btn').show();
                        }, 3000); // Show loading for 3 seconds before hiding
                    }
                }
            });
        });
    });
</script>
</body>
</html>
