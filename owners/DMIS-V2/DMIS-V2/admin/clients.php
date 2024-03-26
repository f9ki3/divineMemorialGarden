<?php include ('header.php'); ?>

    <div class="container border body-content shadow-sm">
        <div class="p-3 mb-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <h5>Clients</h5>
                        <a class="btn btn-primary btn-sm" href="register.php">Add Client</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table border" id="clients">
                            <thead>
                            <tr>
                                <th width="200" class="border-bottom">Full Name</th>
                                <th class="border-bottom">Contact No.</th>
                                <th class="border-bottom">Address</th>
                                <th class="border-bottom">Registered Deceased</th>
                                <th class="border-bottom"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $result = $db->result('immediate_family', "", "fullname ASC"); ?>
                            <?php foreach ($result as $row) : ?>
                                <tr>
                                    <td><?= $row->fullname; ?></td>
                                    <td><?= $row->contact_no; ?></td>
                                    <td><?= $row->address; ?></td>
                                    <td>
                                        <?php $registedDeceased = $db->result('deceased', "immediate_family_id=" . $row->immediate_family_id); ?>
                                        <?= sizeof($registedDeceased); ?>
                                    </td>
                                    <td>
                                        <a href="client-view.php?client_id=<?= $row->immediate_family_id; ?>">View</a>
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

        $('#mnuClients')
            .addClass(' active')
            .attr('aria-current', 'page');

        $('#clients').DataTable();

    </script>

<?php include ('footer.php'); ?>