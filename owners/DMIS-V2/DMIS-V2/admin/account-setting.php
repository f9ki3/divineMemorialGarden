<?php include ('header.php'); ?>

    <div class="container border body-content shadow-sm">
        <div class="p-3 mb-3">
            <div class="row">
                <div class="col-md-12">
                    <h5>Account Setting</h5>
                    <table class="table border mt-3">
                        <tr>
                            <td width="210" class="text-secondary">Full Name</td>
                            <td><?= $admin->account_name; ?></td>
                        </tr>
                        <tr>
                            <td class="text-secondary">User Name</td>
                            <td><?= $admin->username; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#changeInfoModal">Edit Information</button>
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#changeUserPasswordModal">Change Password</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="p-3 mb-3">
            <?php if ($admin->user_type != 'User'): ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="headings d-md-flex justify-content-between align-items-center">
                            <div class="title">
                                <div class="h5">Manage Users</div>
                            </div>
                            <div class="buttons">
                                <a class="btn btn-primary shadow-sm" href="user-add.php">Add User</a>
                            </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table" id="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>User Name</th>
                                    <th>User Type</th>
                                    <th style="width: 50px">Edit</th>
                                    <th style="width: 50px">Delete</th>
                                </tr>
                                </thead>

                                <?php
                                $result = $db->query("SELECT * FROM admin WHERE user_id!=234454");
                                if ( sizeof($result) > 0 )
                                {
                                    foreach ( $result as $row )
                                    {
                                        $user_id            = $row->user_id;
                                        $name               = $row->account_name;
                                        $username           = $row->username;
                                        $type               = $row->user_type; ?>

                                        <tr>
                                            <td><?= $name; ?></td>
                                            <td><?= $username; ?></td>
                                            <td><?= $type; ?></td>
                                            <td>
                                                <a href="user-edit.php?user_id=<?= $user_id; ?>"
                                                   class="btn btn-primary btn-sm editUser"
                                                   data-id="<?= $user_id; ?>"
                                                   data-name="<?= $name; ?>"
                                                   data-username="<?= $username; ?>"
                                                   data-usertype="<?= $type; ?>">
                                                    Edit
                                                </a>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger btn-sm deleteUser" data-id="<?= $user_id; ?>">Delete</button>
                                            </td>
                                        </tr>

                                        <?php
                                    }
                                } else { ?>

                                    <tr>
                                        <td colspan="6" class="text-center">
                                            No other user found!
                                        </td>
                                    </tr>

                                <?php } ?>

                            </table>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- CHANGE INFO -->
    <div class="modal fade" id="changeInfoModal" tabindex="-1" aria-labelledby="changeInfoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeInfoModalLabel">Edit Information</h5>
                    <button type="button" class="btn-close" id="closeChangeInfoModal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="p-2">
                        <input type="hidden" id="user_id" value="<?= $admin->user_id; ?>" />
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="fullname" value="<?= $admin->account_name; ?>" />
                            <label for="floatingInput">Full Name <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" value="<?= $admin->username; ?>" />
                            <label for="floatingInput">User Name <span class="text-danger">*</span></label>
                        </div>
                        <div class="text-dark">
                            Field that has <b>*</b> is <b>REQUIRED</b>.
                        </div>
                    </div>
                </div>
                <span class="modal-footer d-flex justify-content-between align-items-center">
                <span></span>
                <button type="button" class="btn btn-primary" id="updateInfo">Save changes</button>
            </div>
        </div>
    </div>
    </div>

    <!-- CHANGE USER PASSWORD -->
    <div class="modal fade" id="changeUserPasswordModal" tabindex="-1" aria-labelledby="changeUserPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                    <button type="button" class="btn-close" id="closeChangePasswordModal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="p-2">
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="new_password" />
                            <label for="floatingInput">New Password <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" name="confirm_password" class="form-control" id="confirm_password" />
                            <label for="floatingInput">Confirm New Password <span class="text-danger">*</span></label>
                        </div>
                        <div class="text-dark">
                            Field that has <b>*</b> is <b>REQUIRED</b>.
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-between align-items-center">
                    <div class="col-md-6">
                        <div class="form-group form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck3" onclick="myFunction2()">
                            <label class="form-check-label user-select-none" for="exampleCheck3">Show Password</label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" id="updatePassword">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../includes/js/fetch.js"></script>
    <script>

        $(function () {

            $('#updatePassword').on('click', function() {
                let user_id = $('#user_id').val();
                let new_password = $('#new_password').val();
                let confirm_password = $('#confirm_password').val();

                if (new_password.trim().length < 6) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'New password must be at least 6 characters.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#new_password').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (confirm_password.trim().length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please confirm new password.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#confirm_password').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (new_password !== confirm_password) {
                    Swal.fire({
                        title: 'Invalid Value',
                        html: 'New Password mismatched.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#confirm_password').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                const makeUpdate = updateData('account-password-update.php', {
                    user_id, new_password, submitted: true
                });

                if (makeUpdate.status !== 'Success') {
                    Swal.fire(makeUpdate.status, makeUpdate.message);
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: makeUpdate.status,
                        html: makeUpdate.message,
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = `account-setting.php`;
                        }
                    });
                }

            });

            $('#updateInfo').on('click', function() {
                let user_id = $('#user_id').val();
                let username = $('#username').val();
                let fullname = $('#fullname').val();

                if (fullname.trim().length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid full name.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#fullname').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (username.trim().length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid user name.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#username').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                const makeUpdate = updateData('account-update.php', {
                    user_id, fullname, username, submitted: true
                });

                if (makeUpdate.status !== 'Success') {
                    Swal.fire(makeUpdate.status, makeUpdate.message);
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: makeUpdate.status,
                        html: makeUpdate.message,
                        allowOutsideClick: false,
                        allowEscapeKey: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = `account-setting.php`;
                        }
                    });
                }

            });

            $('.deleteUser').on('click', function() {
                let user_id = $(this).attr('data-id');
                Swal.fire({
                    title: 'Delete User',
                    html: `Do you really want to delete this selected user?`,
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: `Delete`
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        const makeDelete = fetchData('user-delete.php', {
                            user_id, submitted: true
                        });

                        if (makeDelete.status !== 'Success') {
                            Swal.fire(makeDelete.status, makeDelete.message);
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: makeDelete.status,
                                html: makeDelete.message,
                                allowOutsideClick: false,
                                allowEscapeKey: false
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href = `account-setting.php`;
                                }
                            });
                        }

                    }
                });
            });

        });

        function myFunction2() {
            let x = document.getElementById("new_password");
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