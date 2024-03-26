<?php
include ('header.php');
$client_id = $_GET['client_id'];
$client = $db->row('immediate_family', "immediate_family_id=$client_id");
?>

    <div class="container border body-content shadow-sm">
        <div class="p-3 mb-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <h5 class="title">Edit Client</h5>
                            <div class="buttons">
                                <a href="client-view.php?client_id=<?= $client_id; ?>" class="btn btn-primary btn-sm"> Back </a>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="fullname" placeholder="Full Name" value="<?= $client->fullname; ?>" />
                            <label for="fullname">Full Name <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="contact_no" placeholder="Contact Number" value="<?= $client->contact_no; ?>" />
                            <label for="contact_no">Contact Number <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="address" placeholder="Address" value="<?= $client->address; ?>" />
                            <label for="address">Address <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" placeholder="User Name" value="<?= $client->username; ?>" />
                            <label for="username">User Name <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-5">
                            <input type="password" class="form-control" id="password" placeholder="Password" value="<?= $client->password; ?>" />
                            <label for="password">Password <span class="text-danger">*</span></label>
                        </div>
                        <div>
                            <button class="btn btn-primary shadow-sm float-md-end" id="submit">Update Client</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../includes/sweetalert2/sweetalert2.min.js"></script>
    <script src="../includes/js/fetch.js"></script>
    <script>

        $(function() {

            $('#submit').click(function () {
                let client_id = `<?= $client_id; ?>`;
                let fullname = $('#fullname').val();
                let contact_no = $('#contact_no').val();
                let address = $('#address').val();
                let username = $('#username').val();
                let password = $('#password').val();

                if (fullname.trim().length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid immediate head full name.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#fullname').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (contact_no.trim().length < 1 || !/^(09|\+639)\d{9}$/.test(contact_no)) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid contact number.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#contact_no').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (address.trim().length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid address.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#address').focus();
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

                if (password.trim().length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid password.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#password').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                const makeUpdate = insertData('client-update.php', {
                    client_id, fullname, contact_no, address, username, password, submitted: true
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
                            location.href = `client-view.php?client_id=<?= $client_id; ?>`;
                        }
                    });
                }

            });

        });

    </script>

<?php include ('footer.php'); ?>