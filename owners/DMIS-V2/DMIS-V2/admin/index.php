<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
            require ('../constants.php');
            echo PROJECT_NAME . ' - User Login';
        ?>
    </title>

    <link rel="stylesheet" href="../includes/bootstrap-5.0.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../includes/css/styles.css" />
    <link rel="stylesheet" href="../includes/fontawesome/css/all.min.css" />


</head>
<body style="background-color:#FAF5E9">

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#009B4D">
        <div class="container">
            <div class="navbar-brand mb-0 h1">
                 <span><?= PROJECT_NAME; ?></span>
            </div>
            <span class="navbar-text">
               Administrator's Login
            </span>
        </div>
    </nav>

    <div class="login-container d-flex justify-content-center align-items-center">
        <div class="login-field shadow bg-white p-5">
            <div class="text-center mb-4">
                <img src="../includes/images/user.png" width="100" height="100" alt="" />
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
                <div class="form-group form-check  mb-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                    <label class="form-check-label user-select-none" for="exampleCheck1">Show Password</label>
                </div>
                <div class="d-flex align-items-center">
                    <span></span>
                    <button id="submit" class="btn btn-primary shadow-sm ms-auto">Login</button>
                </div>
            </form>
            <?php
            if (isset($_GET['login']) && $_GET['login'] == 'error') : ?>
                <div class="mt-4 text-danger">
                    Incorrect username or password.
                </div>
            <?php endif; ?>
        </div>

    </div>

    <script src="../includes/jquery/jquery-3.6.0.min.js"></script>
    <script>

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
