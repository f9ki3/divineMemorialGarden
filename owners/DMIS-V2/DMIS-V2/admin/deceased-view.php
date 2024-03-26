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
                        <div class="h5">Deceased Information</div>
                        <div>
                            <a href="deceased-edit.php?deceased_id=<?= $deceased_id; ?>" class="btn btn-primary btn-sm">&nbsp;Edit Info&nbsp;</a>
                            <?php if ($_GET['a'] == '1'): ?>
                                <a href="client-view.php?client_id=<?= $deceased->immediate_family_id; ?>" class="btn btn-primary btn-sm">Back</a>
                            <?php else : ?>
                                <a href="deceased.php" class="btn btn-primary btn-sm">&nbsp;Back&nbsp;</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <table class="table border">
                        <tr>
                            <td class="text-secondary" width="200">Full Name:</td>
                            <td><?= $deceased->fullname; ?></td>
                        </tr>
                        <tr>
                            <td class="text-secondary">Date of Death:</td>
                            <td><?= date_format($d1, 'F d, Y'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-secondary">Date of Interment:</td>
                            <td><?= date_format($d2, 'F d, Y'); ?></td>
                        </tr>
                        <tr>
                            <td class="text-secondary">Date of Validity Period:</td>
                            <td>
                                <?php
                                    if ($deceased->date_validity_period != '0000-00-00') {
                                        echo date_format($d3, 'F d, Y');
                                    } else {
                                        echo '--';
                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>

                <?php $facilityExist = $db->is_exist('facility', "deceased_id=$deceased_id"); ?>
                <?php if ($facilityExist) : ?>
                <?php $facility = $db->row('facility', "deceased_id=$deceased_id"); ?>
                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <div class="h6">Facility</div>
                    </div>
                    <table class="table border">
                        <tr>
                            <td class="text-secondary" width="200">Burial Option:</td>
                            <td><?= $facility->burial_option; ?></td>
                        </tr>
                        <?php if ($facility->burial_option == 'Burial Ground (9f x 4f)') : ?>
                            <tr>
                                <td class="text-secondary">Lot Cluster:</td>
                                <td><?= $facility->lot_cluster; ?></td>
                            </tr>
                            <tr>
                                <td class="text-secondary">Block Type/Category:</td>
                                <td><?= $facility->block_type_category; ?></td>
                            </tr>
                        <?php endif; ?>

                        <?php if ($facility->burial_option == 'Cabinet Type (Pantheon-Multitomb)') : ?>
                            <tr>
                                <td class="text-secondary">Block Type/Category:</td>
                                <td><?= $facility->block_type_category; ?></td>
                            </tr>
                            <tr>
                                <td class="text-secondary">Level/Layer:</td>
                                <td><?= $facility->level_layer; ?></td>
                            </tr>
                            <tr>
                                <td class="text-secondary">Level Number:</td>
                                <td><?= $facility->level_number; ?></td>
                            </tr>
                        <?php endif; ?>

                        <?php if ($facility->burial_option == 'Bone Crypt') : ?>
                            <tr>
                                <td class="text-secondary">Block Type/Category:</td>
                                <td><?= $facility->block_type_category; ?></td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <td class="text-secondary">Lot Number:</td>
                            <td><?= $facility->lot_number; ?></td>
                        </tr>
                    </table>
                </div>
                <?php endif; ?>

                <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="h6">Payment History</div>
                        <a href="payment-add.php?deceased_id=<?= $deceased_id; ?>" class="btn btn-primary btn-sm">Add Payment</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table border">
                            <thead>
                            <tr>
                                <th class="border-bottom" width="180">Date</th>
                                <th class="border-bottom" width="90">OR No</th>
                                <th class="border-bottom">Particular</th>
                                <th class="border-bottom">Amount Paid</th>
                                <th class="border-bottom">Remarks</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $payments = $db->result('payments', "deceased_id=$deceased_id"); ?>
                            <?php if (sizeof($payments) > 0) : ?>
                                <?php foreach ($payments as $row) : ?>
                                    <?php
                                        $dp = date_create($row->date_paid);
                                    ?>
                                <tr>
                                    <td><?= date_format($dp, 'F d, Y'); ?></td>
                                    <td><?= $row->or_number; ?></td>
                                    <td><?= $row->particular; ?></td>
                                    <td><?= number_format($row->amount, 2); ?></td>
                                    <td>Paid</td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>

                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

</script>

<?php include ('footer.php'); ?>
