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
            echo PROJECT_NAME . ' - User Login';
        ?>
    </title>

    <link rel="stylesheet" href="includes/bootstrap-5.0.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="includes/sweetalert2/sweetalert2.min.css" />
    <link rel="stylesheet" href="includes/css/styles.css" />
    <link rel="stylesheet" href="includes/fontawesome/css/all.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<body style="background-color:#FAF5E9">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#009B4D">
        <div class="container">
            <div class="navbar-brand mb-0 h1">
                 <span><?= PROJECT_NAME; ?></span>
            </div>
            <span class="navbar-text">
                Client's Login
            </span>
        </div>
    </nav>
    <div class="login-container d-flex justify-content-center align-items-center">
        <div class="login-field shadow bg-transparent p-5">
            <div class="text-center mb-4">
                <img src="includes/images/user.png" width="100" height="100" alt="" />
            </div>
            <form action="verify.php" method="post">
                <input type="hidden" name="submitted" value="true">
                <div class="form-group inputIcon mb-3">
                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" required>
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group inputIcon mb-3">
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required>
                    <i class="fa fa-lock"></i>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                        <label class="form-check-label user-select-none" for="exampleCheck1">Show Password</label>
                    </div>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Forgot Password?</a>
                </div>
                
                <button id="submit" class="btn btn-primary form-control shadow-sm mt-3">Login</button>
                <a href="register.php" class="btn btn-success form-control shadow-sm mt-2">Create New Account</a>

            </form>
            <?php
            if (isset($_GET['login']) && $_GET['login'] == 'error') : ?>
                <div class="mt-4 text-danger">
                    Incorrect username or password.
                </div>
            <?php endif; ?>
        </div>
        

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Forgot Password?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Enter your Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" placeholder="Contact Number">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="sendPassword">Send Password</button>
                </div>
            </div>
        </div>
    </div>

    <script src="includes/jquery/jquery-3.6.0.min.js"></script>
    <script src="includes/bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="includes/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="includes/js/fetch.js"></script>
    <script>

        $(function () {

            $('#sendPassword').click(function() {
                let contact_number = $('#contact_number').val();

                if (contact_number.trim().length < 1 || !/^(09|\+639)\d{9}$/.test(contact_number)) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid contact number.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#contact_number').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                const sendPassword = fetchData('send-password.php', {
                    contact_number, submitted: true
                });

                if (sendPassword.status !== 'Success') {
                    Swal.fire(sendPassword.status, sendPassword.message);
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: sendPassword.status,
                        html: `Password has been sent to ${contact_number}`,
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const sendSMS = fetchData('https://sweet-cakes.rsmprojects.com/sendsms.php', {
                                contact_no: contact_number, message: sendPassword.message
                            });

                            location.href = `index.php`;

                        }
                    });
                }
            });

        });

        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

    </script>


</body>
</html>
