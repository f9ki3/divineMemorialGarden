<?php include ('header.php'); ?>

    <div class="container border body-content shadow-sm">
        <div class="p-4 mb-3">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="h5">Create New Account</div>
                <a href="clients.php" class="btn btn-primary btn-sm">Back</a>
            </div>

            <div class="border p-4 mb-3">
                <div class="h6 mb-3">Immediate Family Information</div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="fullname" placeholder="Full Name" />
                    <label for="fullname">Full Name <span class="text-danger">*</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="contact_no" placeholder="Contact Number" />
                    <label for="contact_no">Contact Number <span class="text-danger">*</span></label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="address" placeholder="Address" />
                    <label for="address">Address <span class="text-danger">*</span></label>
                </div>
            </div>

            <div class="border p-4 mb-3">
                <div class="h6 mb-3">Deceased Information</div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="deceased_fullname" placeholder="Full Name of the Deceased" />
                    <label for="deceased_fullname">Full Name of the Deceased <span class="text-danger">*</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="date_of_death" placeholder="Date of Death" />
                    <label for="date_of_death">Date of Death <span class="text-danger">*</span></label>
                </div>
                <div class="form-floating">
                    <input type="date" class="form-control" id="date_of_interment" placeholder="Date of Interment" />
                    <label for="date_of_interment">Date of Interment <span class="text-danger">*</span></label>
                </div>
            </div>

            <div class="border p-4">
                <div class="h6 mb-3">Login Details</div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" placeholder="User Name" />
                    <label for="username">Username <span class="text-danger">*</span></label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" placeholder="Password" />
                    <label for="password">Password <span class="text-danger">*</span></label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" />
                    <label for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="form-group form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                        <label class="form-check-label user-select-none" for="exampleCheck1">Show Password</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary shadow-sm float-md-end" id="submit">Submit Information</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../includes/sweetalert2/sweetalert2.min.js"></script>
    <script src="../includes/js/fetch.js"></script>
    <script>

        $(function() {

            $('#submit').click(function () {

                let fullname = $('#fullname').val();
                let contact_no = $('#contact_no').val();
                let address = $('#address').val();

                let deceased_fullname = $('#deceased_fullname').val();
                let date_of_death = $('#date_of_death').val();
                let date_of_interment = $('#date_of_interment').val();

                let username = $('#username').val();
                let password = $('#password').val();
                let confirm_password = $('#confirm_password').val();

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

                if (deceased_fullname.trim().length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid deceased full name.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#deceased_fullname').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (date_of_death.trim().length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid date of death.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#date_of_death').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (date_of_interment.trim().length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid date of interment.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#date_of_interment').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                let today = new Date();
                let compareDate1 = new Date(date_of_death);
                let compareDate2 = new Date(date_of_interment);

                today.setHours(0, 0, 0, 0);
                compareDate1.setHours(0, 0, 0, 0);
                compareDate2.setHours(0, 0, 0, 0);

                if (compareDate1 > today) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid date of death. Date of death should be not later than today.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#date_of_death').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (compareDate2 < today) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please specify a valid date of interment. Date of interment should be today or later.'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#date_of_interment').focus();
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

                const makeInsert = insertData('register-save.php', {
                    fullname, contact_no, address,
                    deceased_fullname, date_of_death, date_of_interment,
                    username, password, submitted: true
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
                            location.href = `clients.php`;
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
