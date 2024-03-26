<?php
include ('header.php');
$deceased_id = $_GET['deceased_id'];
$deceased = $db->row('deceased', "deceased_id=$deceased_id");

$d1 = date_create($deceased->date_of_death);
$d2 = date_create($deceased->date_of_interment);
$d3 = date_create($deceased->date_validity_period);

?>

<div class="container border body-content shadow-sm">
    <div class="p-4 mb-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="mb-4">
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div class="h5">Edit Deceased Information</div>
                        <a href="deceased-view.php?deceased_id=<?= $deceased_id; ?>&a=2" class="btn btn-primary btn-sm">&nbsp;Back&nbsp;</a>
                    </div>

                    <div class="mb-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="deceased_fullname" placeholder="Full Name of the Deceased" value="<?= $deceased->fullname; ?>" />
                            <label for="deceased_fullname">Full Name of the Deceased <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="date_of_death" placeholder="Date of Death" value="<?= $deceased->date_of_death; ?>" />
                            <label for="date_of_death">Date of Death <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="date_of_interment" placeholder="Date of Interment" value="<?= $deceased->date_of_interment; ?>" />
                            <label for="date_of_interment">Date of Interment <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-floating">
                            <input type="date" class="form-control" id="date_validity_period" placeholder="Date of Validity Period" value="<?= $deceased->date_validity_period; ?>" />
                            <label for="date_validity_period">Date of Validity Period <span class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary shadow-sm float-md-end" id="submit">Update Information</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(function () {

        $('#submit').click(function () {

            let fullname = $('#deceased_fullname').val();
            let date_of_death = $('#date_of_death').val();
            let date_of_interment = $('#date_of_interment').val();
            let date_of_validity_period = $('#date_validity_period').val();

            if (fullname.trim().length < 1) {
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

            if (date_of_validity_period.trim().length < 1) {
                Swal.fire({
                    title: 'Invalid',
                    html: 'Please specify a valid date of validity period.'
                }).then((result) => {
                    if (result.isConfirmed) {
                        setTimeout(function(){
                            $('#date_validity_period').focus();
                        }, 300);
                    }
                });
                return;
            }

            let today = new Date();
            let compareDate1 = new Date(date_of_death);
            let compareDate2 = new Date(date_of_interment);
            let compareDate3 = new Date(date_of_validity_period);

            today.setHours(0, 0, 0, 0);
            compareDate1.setHours(0, 0, 0, 0);
            compareDate2.setHours(0, 0, 0, 0);
            compareDate3.setHours(0, 0, 0, 0);

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

            if (compareDate3 < today) {
                Swal.fire({
                    title: 'Invalid',
                    html: 'Please specify a valid date of validity period. Date of validity period should be today or later.'
                }).then((result) => {
                    if (result.isConfirmed) {
                        setTimeout(function(){
                            $('#date_validity_period').focus();
                        }, 300);
                    }
                });
                return;
            }


            const makeInsert = insertData('deceased-info-update.php', {
                deceased_id: `<?= $deceased_id; ?>`,
                fullname, date_of_death, date_of_interment,
                date_of_validity_period, submitted: true
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
                        location.href = `deceased-view.php?deceased_id=<?= $deceased_id; ?>&a=2`;
                    }
                });
            }

        });

    })

</script>

<?php include ('footer.php'); ?>
