<?php include ('header.php'); ?>

    <div class="container border body-content shadow-sm">
        <div class="p-3 mb-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <div class="h5">Registered Deceased</div>
                    </div>
                    <div class="table-responsive">
                        <table class="table border" id="deceased">
                            <thead>
                                <tr>
                                    <th width="200" class="border-bottom">Full Name</th>
                                    <th class="border-bottom">Date of Death</th>
                                    <th class="border-bottom">Date of Interment</th>
                                    <th class="border-bottom"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = $db->result('deceased', "", "fullname ASC"); ?>
                                <?php foreach ($result as $row) : ?>
                                    <?php
                                    $d1 = date_create($row->date_of_death);
                                    $d3 = date_create($row->date_of_interment);
                                    ?>
                                    <tr>
                                        <td><?= $row->fullname; ?></td>
                                        <td><?= date_format($d1, 'F d, Y'); ?></td>
                                        <td><?= date_format($d3, 'F d, Y'); ?></td>
                                        <td>
                                            <a href="deceased-view.php?deceased_id=<?= $row->deceased_id; ?>&a=2">Show More..</a>
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

    <script src="../includes/datatable/datatables.min.js"></script>
    <script>

        $('#mnuDeceased')
            .addClass(' active')
            .attr('aria-current', 'page');

        $('#deceased').DataTable();

    </script>

<?php include ('footer.php'); ?>