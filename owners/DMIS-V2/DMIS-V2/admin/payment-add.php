<?php
include ('header.php');
$deceased_id = $_GET['deceased_id'];
$deceased = $db->row('deceased', "deceased_id=$deceased_id");
$d1 = date_create($deceased->date_of_death);
$d2 = date_create($deceased->date_of_interment);
$d3 = date_create($deceased->date_validity_period);

$facilityExist = $db->is_exist('facility', "deceased_id=$deceased_id");
$burialOption = '';

if ($facilityExist) {
    $facility = $db->row('facility', "deceased_id=$deceased_id");
    $burialOption = $facility->burial_option;
}

?>

    <div class="container border body-content shadow-sm mb-5">
        <div class="p-3">
            <div class="row">
                <div class="col-md-12">

                    <div class="mb-4 d-flex justify-content-between align-items-center">
                        <h5>Add Payment</h5>
                        <a class="btn btn-primary btn-sm" href="deceased-view.php?deceased_id=<?= $deceased_id; ?>&a=2">&nbsp;Back&nbsp;</a>
                    </div>
                    
                    <div class="mb-4">
                        <div class="mb-3"><b>Deceased Information</b></div>
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

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Burial Payment</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="other-tab" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab" aria-controls="profile" aria-selected="false">Other Payment</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="border border-top-0 p-3">

                            <?php if (!$facilityExist) : ?>

                                <div class="border p-3 mb-3 parent-container" id="burialContainer1">
                                    <div class="burial-type-container mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input burialOption" data-id="burialContainer1" type="radio" name="burialOption" id="burialOption1" value="Burial Ground (9f x 4f)">
                                            <label class="form-check-label" for="burialOption1">
                                                Burial Ground (9f x 4f)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" id="lot_cluster" aria-label="Lot Cluster">
                                            <option value="Lot Cluster A (Mount Moriah)">Lot Cluster A (Mount Moriah)</option>
                                            <option value="Lot Cluster B (Mount Carmel)">Lot Cluster B (Mount Carmel)</option>
                                            <option value="Lot Cluster C (Mount Sinai) only for reservation">Lot Cluster C (Mount Sinai) only for reservation</option>
                                            <option value="Lot Cluster D (Gethsemane for Indigent Burial)">Lot Cluster D (Gethsemane for Indigent Burial)</option>
                                        </select>
                                        <label for="lot_cluster">Lot Cluster</label>
                                    </div>
                                    <div class="form-floating d-none mt-3" id="categoryField">
                                        <select class="form-select" id="category" aria-label="Category">
                                            <option value="Category 1 (MSWDO) No income no family">Category 1 (MSWDO) No income no family</option>
                                            <option value="Category 2 (Has No Income with Family)">Category 2 (Has No Income with Family)</option>
                                        </select>
                                        <label for="category">Block Type/Category</label>
                                    </div>
                                </div>

                                <div class="border p-3 mb-3 parent-container" id="burialContainer2">
                                    <div class="burial-type-container mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input burialOption" data-id="burialContainer2" type="radio" name="burialOption" id="burialOption2" value="Cabinet Type (Pantheon-Multitomb)">
                                            <label class="form-check-label" for="burialOption2">
                                                Cabinet Type (Pantheon-Multitomb)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="zone_category" aria-label="ZoneCategory">
                                            <option value="Zone A">Zone A</option>
                                            <option value="Zone B">Zone B</option>
                                            <option value="Zone C">Zone C</option>
                                            <option value="Zone D">Zone D</option>
                                        </select>
                                        <label for="zone_category">Block Type/Category</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="level_layer" aria-label="Level/Leyer">
                                            <option value="Level 1">Level 1</option>
                                            <option value="Level 2">Level 2</option>
                                            <option value="Level 3">Level 3</option>
                                            <option value="Level 4">Level 4</option>
                                        </select>
                                        <label for="level_layer">Level/Leyer</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="level_number">
                                        <label for="level_number">Level Number</label>
                                    </div>
                                </div>

                                <div class="border p-3 mb-3 parent-container" id="burialContainer3">
                                    <div class="burial-type-container mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input burialOption" data-id="burialContainer3" type="radio" name="burialOption" id="burialOption3" value="Bone Crypt">
                                            <label class="form-check-label" for="burialOption3">
                                                Bone Crypt
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select" id="bone_crypt_category" aria-label="BoneCryptCategory">
                                            <option value="Bone Cluster A">Bone Cluster A</option>
                                            <option value="Bone Cluster B">Bone Cluster B</option>
                                            <option value="Bone Cluster C">Bone Cluster C</option>
                                        </select>
                                        <label for="bone_crypt_category">Block Type/Category</label>
                                    </div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="lot_number">
                                    <label for="lot_number">Lot Number</label>
                                </div>
                            <?php endif; ?>

                            <?php if (!$facilityExist || ($facilityExist && $facility->has_purchased_lot == 'No')) : ?>

                                <div class="border p-3 mb-3">
                                    <div class="ps-2 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault1">
                                            <label class="form-check-label" for="flexCheckDefault1">
                                                Purchase Burial Lot?
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="burial_purchase_lot_amount" value="50000.00">
                                        <label for="burial_purchase_lot_amount">Amount</label>
                                    </div>
                                </div>

                            <?php endif; ?>

                            <?php if (!$facilityExist || ($facilityExist && $facility->excavate_and_construction == 'No')) : ?>
                                <div class="border p-3 mb-3">
                                    <div class="ps-2 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault2">
                                            <label class="form-check-label" for="flexCheckDefault2">
                                                Excavation and Construction of Niche
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="excavation_and_construction_amount" value="10000.00">
                                        <label for="excavation_and_construction_amount">Amount</label>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (!$facilityExist) : ?>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="burial_permit_fee" value="500.00">
                                    <label for="burial_permit_fee">Burial Permit Fee</label>
                                </div>
                            <?php endif; ?>

                            <?php if ($facilityExist) : ?>
                                <?php if ($facility->has_purchased_lot == 'No' || $facility->excavate_and_construction == 'No') : ?>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control form-control-lg bg-white" id="amount" style="font-weight:bold" readonly>
                                        <label for="amount">Total Amount</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="or_number" style="font-weight: bold">
                                        <label for="or_number">OR Number</label>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <span></span>
                                        <div>
                                            <button class="btn btn-primary <?= $facilityExist ? 'd-none':''; ?>" id="savePayment">Save Payment</button>
                                            <button class="btn btn-primary <?= $facilityExist ? '':'d-none'; ?>" id="save2ndPayment">Save Payment</button>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php else: ?>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-control-lg bg-white" id="amount" style="font-weight:bold" readonly>
                                    <label for="amount">Total Amount</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="or_number" style="font-weight: bold">
                                    <label for="or_number">OR Number</label>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                    <span></span>
                                    <div>
                                        <button class="btn btn-primary <?= $facilityExist ? 'd-none':''; ?>" id="savePayment">Save Payment</button>
                                        <button class="btn btn-primary <?= $facilityExist ? '':'d-none'; ?>" id="save2ndPayment">Save Payment</button>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if ($facilityExist && $facility->has_purchased_lot == 'Yes' && $facility->excavate_and_construction == 'Yes'): ?>
                                No payable found.
                            <?php endif; ?>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
                            <div class="border border-top-0 p-3">

                                <div class="border p-3 mb-3" id="parent3">
                                    <div class="ps-2 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input otherPayment" type="checkbox" id="flexCheckDefault3" data-id="parent3">
                                            <label class="form-check-label" for="flexCheckDefault3">
                                                Exhumation Fee
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="exhumation_fee" value="1500.00">
                                        <label for="exhumation_fee">Amount</label>
                                    </div>
                                </div>

                                <div class="border p-3 mb-3" id="parent4">
                                    <div class="ps-2 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input otherPayment" type="checkbox" id="flexCheckDefault4" data-id="parent4">
                                            <label class="form-check-label" for="flexCheckDefault4">
                                                Removal of Cadaver
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="removal_of_cadaver_fee" value="3000.00">
                                        <label for="removal_of_cadaver_fee">Amount</label>
                                    </div>
                                </div>

                                <div class="border p-3 mb-3" id="parent5">
                                    <div class="ps-2 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input otherPayment" type="checkbox" id="flexCheckDefault5" data-id="parent5">
                                            <label class="form-check-label" for="flexCheckDefault5">
                                                Perpetual Care
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="perpetual_care_fee" value="300.00">
                                        <label for="perpetual_care_fee">Amount</label>
                                    </div>
                                </div>

                                <div class="border p-3 mb-3" id="parent6">
                                    <div class="ps-2 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input otherPayment" type="checkbox" id="flexCheckDefault6" data-id="parent6">
                                            <label class="form-check-label" for="flexCheckDefault6">
                                                Another Cadaver of Immediate Family of the Dead will be buried in the same slot (Burial Ground)
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="sapaw1_fee" value="10000.00">
                                        <label for="sapaw1_fee">Amount</label>
                                    </div>
                                </div>

                                <div class="border p-3 mb-4" id="parent7">
                                    <div class="ps-2 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input otherPayment" type="checkbox" id="flexCheckDefault7" data-id="parent7">
                                            <label class="form-check-label" for="flexCheckDefault7">
                                                Another Cadaver of Immediate Family of the Dead will be buried in the same slot (Cabinet Type Pantheon)
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="sapaw2_fee" value="15000.00">
                                        <label for="sapaw2_fee">Amount</label>
                                    </div>

                                </div>

                                <div class="h6 mb-3">Bone Facility</div>

                                <div class="border p-3 mb-3" id="parent9">
                                    <div class="ps-2 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input otherPayment" type="checkbox" id="flexCheckDefault9" data-id="parent9">
                                            <label class="form-check-label" for="flexCheckDefault9">
                                                General Bone Facility
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-4">
                                        <input type="number" class="form-control" id="general_bone_facility_fee" value="0.00">
                                        <label for="general_bone_facility_fee">Amount</label>
                                    </div>

                                    <div class="ps-2 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input otherPayment" type="checkbox" id="flexCheckDefault10" data-id="parent9">
                                            <label class="form-check-label" for="flexCheckDefault10">
                                                Cabinet Type Bone Facility
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="cabinet_type_bone_facility_fee" value="3000.00">
                                        <label for="cabinet_type_bone_facility_fee">Amount</label>
                                    </div>

                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control form-control-lg bg-white" id="other_amount" style="font-weight: bold" readonly>
                                    <label for="amount">Total Amount</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="or_number2" style="font-weight: bold">
                                    <label for="or_number2">OR Number</label>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                    <span></span>
                                    <button class="btn btn-primary" id="saveOtherPayment">Save Payment</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../includes/js/burial-types.js"></script>
    <script>

        $(function () {

            var burialOption = `<?= $burialOption; ?>`;
            var other_payment = [];
            var fees = [];
            var total_other_payment = 0;

            var permit_fee = burialOption.length > 0 ? 0:500;
            var total_amount = permit_fee;

            printTotal();
            printTotal2();

            $('#lot_cluster').change(function () {
                let selected = $(this).val();
                if (selected === 'Lot Cluster D (Gethsemane for Indigent Burial)') {
                    $('#categoryField').removeClass('d-none');
                } else {
                    if (!$(this).hasClass('d-none')) {
                        $('#categoryField').addClass('d-none');
                    }
                }
            });

            $('.burialOption').click(function () {
                let container = $(this).attr('data-id');
                burialOption = $(this).val();
                $(`.parent-container`).removeClass('border-primary');
                $(`#${container}`).addClass('border-primary');
            });

            $('#savePayment').click(function () {
                let lot_cluster = '';
                let block_type_category = '';
                let level_layer = '';
                let level_number = '';

                let has_purchased_lot = 'No';
                let burial_permit_fee = 'Yes';
                let excavate_and_construction = 'No';

                let burial_purchase_lot_amount = 0;
                let excavation_and_construction_amount = 0;

                let lot_number = $('#lot_number').val();
                let or_number = $('#or_number').val();

                if (burialOption.length < 1) {
                    Swal.fire({
                        title: 'Invalid',
                        html: `
                            Please specify burial option. Select one (1) from
                            <ul style="list-style-type: none">
                                <li>Burial Ground (9f x 4f)</li>
                                <li>Cabinet Type (Pantheon-Multitomb)</li>
                                <li>Bone Crypt</li>
                            </ul>
                        `,
                    });
                    return;
                }

                if (burialOption === 'Burial Ground (9f x 4f)') {
                    lot_cluster = $('#lot_cluster').val();
                    block_type_category = $('#lot_cluster').val() === 'Lot Cluster D (Gethsemane for Indigent Burial)' ? $('#category').val():'';
                } else if (burialOption === 'Cabinet Type (Pantheon-Multitomb)') {
                    block_type_category = $('#zone_category').val();
                    level_layer = $('#level_layer').val();
                    level_number = $('#level_number').val();

                    if (level_number.length < 1) {
                        Swal.fire({
                            title: 'Invalid Value',
                            html: 'Please specify level.',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                setTimeout(function(){
                                    $('#level_number').focus();
                                }, 300);
                            }
                        });
                        return;
                    }

                } else {
                    block_type_category = $('#bone_crypt_category').val();
                }

                if (lot_number.length < 1) {
                    Swal.fire({
                        title: 'Invalid Value',
                        html: 'Please specify Lot Number.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#lot_number').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if ($('#flexCheckDefault1').is(':checked')) {
                    if ($('#burial_purchase_lot_amount').val().length < 1) {
                        Swal.fire({
                            title: 'Invalid Value',
                            html: 'Please amount for Purchase Burial Lot.',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                setTimeout(function(){
                                    $('#burial_purchase_lot_amount').focus();
                                }, 300);
                            }
                        });
                        return;
                    }

                    has_purchased_lot = 'Yes';
                    burial_purchase_lot_amount = $('#burial_purchase_lot_amount').val();

                }

                if ($('#flexCheckDefault2').is(':checked')) {
                    if ($('#excavation_and_construction_amount').val().length < 1) {
                        Swal.fire({
                            title: 'Invalid Value',
                            html: 'Please amount for Excavation and Construction of Niche.',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                setTimeout(function(){
                                    $('#excavation_and_construction_amount').focus();
                                }, 300);
                            }
                        });
                        return;
                    }
                    excavate_and_construction = 'Yes';
                    excavation_and_construction_amount = $('#excavation_and_construction_amount').val();
                }

                if ($('#or_number').val().length < 1) {
                    Swal.fire({
                        title: 'Invalid Value',
                        html: 'Please specify OR Number.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#or_number').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                const data = {
                    deceased_id: `<?= $deceased_id; ?>`,
                    burialOption,
                    lot_cluster,
                    block_type_category,
                    level_layer,
                    level_number,
                    lot_number,
                    or_number,
                    burial_permit_fee,
                    has_purchased_lot,
                    excavate_and_construction,
                    burial_purchase_lot_amount,
                    excavation_and_construction_amount,
                    total_amount,
                    submitted: true
                }

                const makeInsert = insertData('payment-save.php', data);

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

            $('#save2ndPayment').click(function () {
                let has_purchased_lot = `<?= $facilityExist ? $facility->has_purchased_lot:'No'; ?>`;
                let excavate_and_construction = `<?= $facilityExist ? $facility->excavate_and_construction:'No'; ?>`;
                let burial_purchase_lot_amount = $('#burial_purchase_lot_amount').length > 0 ? $('#burial_purchase_lot_amount').val():0;
                let excavation_and_construction_amount = $('#excavation_and_construction_amount').length > 0 ? $('#excavation_and_construction_amount').val():0;
                let or_number = $('#or_number').val();

                if (!$('#flexCheckDefault1').is(':checked') && !$('#flexCheckDefault2').is(':checked')) {
                    Swal.fire({
                        title: 'Invalid',
                        html: 'Please check at least one of the payables.',
                    });
                    return;
                }

                if ($('#flexCheckDefault1').length > 0) {
                    if ($('#flexCheckDefault1').is(':checked')) {
                        has_purchased_lot = 'Yes';
                    } else {
                        has_purchased_lot = 'No';
                    }
                }

                if ($('#flexCheckDefault2').length > 0) {
                    if ($('#flexCheckDefault2').is(':checked')) {
                        excavate_and_construction = 'Yes';
                    } else {
                        excavate_and_construction = 'No';
                    }
                }

                if (or_number.length < 1) {
                    Swal.fire({
                        title: 'Invalid Value',
                        html: 'Please specify OR Number.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function () {
                                $('#or_number').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                const data = {
                    facility_id: `<?= $facilityExist ? $facility->facility_id:0; ?>`,
                    deceased_id: `<?= $deceased_id; ?>`,
                    has_purchased_lot,
                    excavate_and_construction,
                    burial_purchase_lot_amount,
                    excavation_and_construction_amount,
                    total_amount,
                    or_number,
                    submitted: true
                };

                const makeInsert = insertData('payment-2nd-save.php', data);

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

            $('#flexCheckDefault1').click(function () {
                let is_checked = $(this).is(':checked');
                let burial_purchase_lot_amount = parseFloat($('#burial_purchase_lot_amount').val());
                let excavation_and_construction_amount = $('#flexCheckDefault2').is(':checked') ? parseFloat($('#excavation_and_construction_amount').val()) : 0;
                if (is_checked) {
                    total_amount = permit_fee + burial_purchase_lot_amount + excavation_and_construction_amount;
                } else {
                    total_amount = permit_fee + excavation_and_construction_amount;
                }
                printTotal();
            });

            $('#burial_purchase_lot_amount').change(function () {
                let is_checked = $('#flexCheckDefault1').is(':checked');
                let burial_purchase_lot_amount = parseFloat($('#burial_purchase_lot_amount').val());
                let excavation_and_construction_amount = $('#flexCheckDefault2').is(':checked') ? parseFloat($('#excavation_and_construction_amount').val()) : 0;
                if (is_checked) {
                    total_amount = permit_fee + burial_purchase_lot_amount + excavation_and_construction_amount;
                } else {
                    total_amount = permit_fee + excavation_and_construction_amount;
                }
                printTotal();
            });

            $('#flexCheckDefault2').click(function () {
                let is_checked = $(this).is(':checked');
                let burial_purchase_lot_amount = $('#flexCheckDefault1').is(':checked') ? parseFloat($('#burial_purchase_lot_amount').val()) : 0;
                let excavation_and_construction_amount = parseFloat($('#excavation_and_construction_amount').val());
                if (is_checked) {
                    total_amount = permit_fee + excavation_and_construction_amount + burial_purchase_lot_amount;
                } else {
                    total_amount = permit_fee + burial_purchase_lot_amount;
                }
                printTotal();
            });

            $('#excavation_and_construction_amount').change(function () {
                let is_checked = $('#flexCheckDefault2').is(':checked');
                let excavation_and_construction_amount = parseFloat($('#excavation_and_construction_amount').val());
                let burial_purchase_lot_amount = $('#flexCheckDefault1').is(':checked') ? parseFloat($('#burial_purchase_lot_amount').val()) : 0;
                if (is_checked) {
                    total_amount = permit_fee + excavation_and_construction_amount + burial_purchase_lot_amount;
                } else {
                    total_amount = permit_fee + burial_purchase_lot_amount;
                }
                printTotal();
            });

            function printTotal() {
                let money = formatMoney(total_amount);
                $('#amount').val(money);
            }

            $('#saveOtherPayment').click(function () {

                let or_number = $('#or_number2').val();

                if (total_other_payment < 1) {
                    Swal.fire({
                        title: 'Invalid Value',
                        html: 'Please select a payable.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#other_amount').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                if (or_number.length < 1) {
                    Swal.fire({
                        title: 'Invalid Value',
                        html: 'Please specify a valid OR Number.',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            setTimeout(function(){
                                $('#or_number2').focus();
                            }, 300);
                        }
                    });
                    return;
                }

                const data = {
                    deceased_id: `<?= $deceased_id; ?>`,
                    total_other_payment,
                    or_number,
                    other_payment,
                    fees,
                    submitted: true
                };

                const makeInsert = insertData('other-payment-save.php', data);

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

            $('#flexCheckDefault3').click(function () {
                let is_checked = $(this).is(':checked');
                let amount = parseFloat($('#exhumation_fee').val());
                if (is_checked) {
                    total_other_payment += amount;
                    other_payment.push('Exhumation Fee');
                    fees.push(amount);
                } else {
                    total_other_payment -= amount;
                    updateOtherPayment('Exhumation Fee');
                    updateFees(amount);
                }
                printTotal2();
            });

            $('#flexCheckDefault4').click(function () {
                let is_checked = $(this).is(':checked');
                let amount = parseFloat($('#removal_of_cadaver_fee').val());
                if (is_checked) {
                    total_other_payment += amount;
                    other_payment.push('Removal of Cadaver');
                    fees.push(amount);
                } else {
                    total_other_payment -= amount;
                    updateOtherPayment('Removal of Cadaver');
                    updateFees(amount);
                }
                printTotal2();
            });

            $('#flexCheckDefault5').click(function () {
                let is_checked = $(this).is(':checked');
                let amount = parseFloat($('#perpetual_care_fee').val());
                if (is_checked) {
                    total_other_payment += amount;
                    other_payment.push('Perpetual Care');
                    fees.push(amount);
                } else {
                    total_other_payment -= amount;
                    updateOtherPayment('Perpetual Care');
                    updateFees(amount);
                }
                printTotal2();
            });

            $('#flexCheckDefault6').click(function () {
                let is_checked = $(this).is(':checked');
                let amount = parseFloat($('#sapaw1_fee').val());
                if (is_checked) {
                    total_other_payment += amount;
                    fees.push(amount);
                    other_payment.push('Another Cadaver of Immediate Family of the Dead will be buried in the same slot (Burial Ground)');
                } else {
                    total_other_payment -= amount;
                    updateOtherPayment('Another Cadaver of Immediate Family of the Dead will be buried in the same slot (Burial Ground)');
                    updateFees(amount);
                }
                printTotal2();
            });

            $('#flexCheckDefault7').click(function () {
                let is_checked = $(this).is(':checked');
                let amount = parseFloat($('#sapaw2_fee').val());
                if (is_checked) {
                    total_other_payment += amount;
                    fees.push(amount);
                    other_payment.push('Another Cadaver of Immediate Family of the Dead will be buried in the same slot (Cabinet Type Pantheon)');
                } else {
                    total_other_payment -= amount;
                    updateOtherPayment('Another Cadaver of Immediate Family of the Dead will be buried in the same slot (Cabinet Type Pantheon)');
                    updateFees(amount);
                }
                printTotal2();
            });

            $('#flexCheckDefault9').click(function () {
                let is_checked = $(this).is(':checked');
                let amount = parseFloat($('#general_bone_facility_fee').val());
                if (is_checked) {

                    if ($('#flexCheckDefault10').is(':checked')) {
                        total_other_payment -= parseFloat($('#cabinet_type_bone_facility_fee').val());
                    }

                    $('#flexCheckDefault10').prop('checked', false);
                    total_other_payment += amount;
                    other_payment.push('General Bone Facility');
                    updateOtherPayment('Cabinet Type Bone Facility');
                    fees.push(amount);
                    updateFees(parseFloat($('#cabinet_type_bone_facility_fee').val()));
                } else {
                    total_other_payment -= amount;
                }
                printTotal2();
            });

            $('#flexCheckDefault10').click(function () {
                let is_checked = $(this).is(':checked');
                let amount = parseFloat($('#cabinet_type_bone_facility_fee').val());
                if (is_checked) {
                    $('#flexCheckDefault9').prop('checked', false);
                    total_other_payment += amount;
                    other_payment.push('Cabinet Type Bone Facility');
                    updateOtherPayment('General Bone Facility');
                    fees.push(amount);
                    updateFees(parseFloat($('#general_bone_facility_fee').val()));
                } else {
                    total_other_payment -= amount;
                }
                printTotal2();

            });

            $('.otherPayment').click(function () {
                let parentEl = $(this).attr('data-id');
                let is_checked = $(this).is(':checked');
                if (is_checked) {
                    $(`#${parentEl}`).addClass('border-primary');
                } else {
                    $(`#${parentEl}`).removeClass('border-primary');
                }
            });

            function updateOtherPayment(val) {
                const index = other_payment.indexOf(val);
                if (index > -1) {
                    other_payment.splice(index, 1);
                }
                console.log(other_payment)
            }

            function updateFees(val) {
                const index = fees.indexOf(val);
                if (index > -1) {
                    fees.splice(index, 1);
                }
                console.log(fees)
            }

            function printTotal2() {
                let money = formatMoney(total_other_payment);
                $('#other_amount').val(money);
            }

            function formatMoney(number, decPlaces, decSep, thouSep) {
                decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces,
                    decSep = typeof decSep === "undefined" ? "." : decSep;
                thouSep = typeof thouSep === "undefined" ? "," : thouSep;
                var sign = number < 0 ? "-" : "";
                var i = String(parseInt(number = Math.abs(Number(number) || 0).toFixed(decPlaces)));
                var j = (j = i.length) > 3 ? j % 3 : 0;

                return sign +
                    (j ? i.substr(0, j) + thouSep : "") +
                    i.substr(j).replace(/(\decSep{3})(?=\decSep)/g, "$1" + thouSep) +
                    (decPlaces ? decSep + Math.abs(number - i).toFixed(decPlaces).slice(2) : "");
            }

        });

    </script>

<?php include ('footer.php'); ?>