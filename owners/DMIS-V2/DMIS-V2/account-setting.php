<?php include ('header.php'); ?>

<div class="container border body-content shadow-sm">
    <div class="p-3 mb-3">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <h5 class="title">Account Setting</h5>
                    <div class="buttons">
                        <a href="account-edit.php" class="btn btn-primary btn-sm">Edit Account</a>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editPasswordModal">Change Password</button>
                    </div>
                </div>
                <table class="table border">
                    <tr>
                        <td class="text-secondary" width="170">Full Name</td>
                        <td><?= $client->fullname; ?></td>
                    </tr>
                    <tr>
                        <td class="text-secondary">User Name</td>
                        <td><?= $client->username; ?></td>
                    </tr>
                    <tr>
                        <td class="text-secondary">Contact Number</td>
                        <td><?= $client->contact_no; ?></td>
                    </tr>
                    <tr>
                        <td class="text-secondary">Address</td>
                        <td><?= $client->address; ?></td>
                    </tr>
                    <tr>
                        <td class="text-secondary">Registration Date</td>
                        <td><?= $client->registration_date; ?></td>
                    </tr>
                    <tr>
                        <td class="text-secondary">Remarks</td>
                        <td><?= $client->remarks; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editPasswordModal" tabindex="-1" aria-labelledby="editPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPasswordModalLabel">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="p-3">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="current_password" placeholder="Current Password">
                        <label for="current_password">Current Password <span class="text-danger">*</span></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="New Password">
                        <label for="password">New Password <span class="text-danger">*</span></label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password">
                        <label for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                    </div>
                    <div class="form-group form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck3" onclick="myFunction()">
                        <label class="form-check-label user-select-none" for="exampleCheck3">Show Password</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="updateUPassword">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script>

    $('#mnuAccount')
        .addClass(' active')
        .attr('aria-current', 'page');


    $(function () {

        $('#updateUPassword').on('click', function() {
            let client_id = `<?= $client->immediate_family_id ?>`;
            let current_password = $('#current_password').val();
            let new_password = $('#password').val();
            let confirm_password = $('#confirm_password').val();

            if (current_password.trim().length < 1) {
                Swal.fire({
                    title: 'Invalid',
                    html: 'Please specify a current password.',
                }).then((result) => {
                    if (result.isConfirmed) {
                        setTimeout(function(){
                            $('#current_password').focus();
                        }, 300);
                    }
                });
                return;
            }

            if (new_password.trim().length < 6) {
                Swal.fire({
                    title: 'Invalid',
                    html: 'Please specify a new password with at least 6-characters.',
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
                    html: 'Password mismatched. Try again.',
                }).then((result) => {
                    if (result.isConfirmed) {
                        setTimeout(function(){
                            $('#confirm_password').focus();
                        }, 300);
                    }
                });
                return;
            }

            const makeUpdate = updateData('account-update.php', {
                client_id, current_password, password: new_password, submitted: true
            });

            if (makeUpdate.status !== 'Success') {
                Swal.fire({
                    title: 'Access Denied',
                    html: makeUpdate.message,
                    allowOutsideClick: false,
                    allowEscapeKey: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        setTimeout(function(){
                            $('#current_password').focus();
                        }, 300);
                    }
                });
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

    });

    function myFunction() {
        let z = document.getElementById("current_password");
        let x = document.getElementById("password");
        let y = document.getElementById("confirm_password");
        if (x.type === "password") {
            x.type = "text";
            y.type = "text";
            z.type = "text";
        } else {
            x.type = "password";
            y.type = "password";
            z.type = "password";
        }
    }

</script>

<?php include ('footer.php'); ?>
