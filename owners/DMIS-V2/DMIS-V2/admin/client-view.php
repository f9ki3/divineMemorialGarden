<?php
include ('header.php');
$client_id = $_GET['client_id'];
$client = $db->row('immediate_family', "immediate_family_id=$client_id");
?>

<div class="container border body-content shadow-sm">
    <div class="p-4 mb-3">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <div class="h5">Client Information View</div>
                    <div>
                        <a href="clients-edit.php?client_id=<?= $client_id; ?>" class="btn btn-primary btn-sm">&nbsp;Edit&nbsp;</a>
                        <?php if ($client->remarks != 'Verified'): ?>
                            <button class="btn btn-success btn-sm" id="verify">&nbsp;Verify&nbsp;</button>
                        <?php endif; ?>
                        <a href="clients.php" class="btn btn-primary btn-sm">&nbsp;Back&nbsp;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4">
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
                <div class="mb-3">
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div class="h6">Registered Deceased</div>

                        <?php if ($client->remarks == 'Verified'): ?>
                            <a href="register-deceased.php?immediate_family_id=<?= $client_id; ?>" class="btn btn-primary btn-sm">Register Deceased</a>
                        <?php endif; ?>

                    </div>
                    <div class="table-responsive">
                        <table class="table border">
                            <thead>
                            <tr>
                                <th width="350" class="border-bottom">Name</th>
                                <th class="border-bottom">Date of Death</th>
                                <th class="border-bottom">Date of Interment</th>
                                <th class="border-bottom"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $client_id = $client->immediate_family_id;
                            $result = $db->result('deceased', "immediate_family_id=$client_id"); ?>
                            <?php foreach ($result as $row) : ?>
                                <?php
                                $d1 = date_create($row->date_of_death);
                                $d2 = date_create($row->date_of_interment);
                                ?>
                                <tr>
                                    <td><?= $row->fullname; ?></td>
                                    <td><?= date_format($d1, 'F d, Y'); ?></td>
                                    <td><?= date_format($d2, 'F d, Y'); ?></td>
                                    <td>
                                        <a href="deceased-view.php?deceased_id=<?= $row->deceased_id; ?>&a=1">Show More..</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(function () {

        $('#register').click(function () {

        });

        $('#verify').click(function () {
            let immediate_family_id = `<?= $client_id; ?>`;
            Swal.fire({
                title: 'Verify Client',
                html: 'Do you want to verify this client?',
                showCancelButton: true,
                confirmButtonText: `Yes, Verify It!`,
                denyButtonText: `No`,
            }).then((result) => {
                if (result.isConfirmed) {
                    const makeVerify = fetchData('verify-client.php', { immediate_family_id, submitted: true });
                    if (makeVerify.status === 'ok') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            html: makeVerify.message,
                            allowOutsideClick: false,
                            allowEscapeKey: false
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.href = `client-view.php?client_id=${immediate_family_id}`;
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Failed',
                            html: immediate_family_id.message
                        })
                    }
                }
            });
        });

    });

</script>

<?php include ('footer.php'); ?>
