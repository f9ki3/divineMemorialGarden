<?php
    include ('header.php');
?>

    <div class="container bg-white shadow p-4 mb-5">
    
        <div class="row mt-4">
            <div class="col-sm-12">
                <div class="headings d-md-flex justify-content-between align-items-center mb-4">
                    <div class="title">
                        <div class="h5">Add User</div>
                    </div>
                    <div class="buttons">
                        <a class="btn btn-primary shadow-sm" href="account-setting.php">Back</a>
                    </div>
                </div>
                <div class="p-2">
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" id="name" />
                            <label for="name">Name <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="user_type" class="form-control bg-white" id="user_type" value="User" readonly />
                            <label for="user_type">User Type <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" name="username" class="form-control" id="username" />
                            <label for="username">User Name <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="password" />
                            <label for="password">Password <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="confirm_password" class="form-control" id="confirm_password" />
                            <label for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                        </div>
                        <div class="text-dark">
                            Field that has <b>*</b> is <b>REQUIRED</b>.
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="col-md-6">
                        <div class="form-group form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                            <label class="form-check-label user-select-none" for="exampleCheck1">Show Password</label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" id="saveUser">Save User</button>
                </div>
            </div>
        </div>
    </div>

    
    <script src="../includes/js/fetch.js"></script>
    <script>

        $(function() {

             $('#saveUser').click(function() {

                let name = $('#name').val();
                let user_type = $('#user_type').val();
                let username = $('#username').val();
                let password = $('#password').val();
                let confirm_password = $('#confirm_password').val();

                if (name.trim().length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid name.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#name').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (username.trim().length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid username.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#username').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (password.trim().length < 6) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Password must be at least 6 characters.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#password').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (confirm_password.trim().length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please confirm password.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#confirm_password').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (password !== confirm_password) {
                    Swal.fire({
                        title: 'Invalid Value',
                        html: 'Password mismatched.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#confirm_password').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                const makeInsert = insertData('user-save.php', {
                    name, user_type, username, password, submitted: true
                });

                if (makeInsert.status !== 'Success') {
                    Swal.fire(makeInsert.status, makeInsert.message);
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: makeInsert.status,
                        html: makeInsert.message,
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = `account-setting.php`;
                        }
                    });
                }
            });

        });

        function myFunction() {
            let x = document.getElementById("password");
            let y = document.getElementById("confirm_password");
            if (x.type === "password") {
                x.type = "text";
                y.type = "text";
            } else {
                x.type = "password";
                y.type = "password";
            }
        }

    </script>

<?php include ('footer.php'); ?>