<html lang="en">
<?php include 'header.php'; ?>
<body>
<div style="display: flex; flex-direction: row">
<?php include 'navbar.php'; ?>
<div class="bg-light w-100 p-3">
    <?php
    // Check if lawn_name is set in the GET parameters
    if(isset($_GET['lawn_name']) && !empty($_GET['lawn_name'])) {
        // Retrieve lawn_name from GET parameters
        $lawn_name = htmlspecialchars($_GET['lawn_name']);
        
        // Check if $lawn_name is set and not empty before displaying
        if(!empty($lawn_name)) {
            echo '<div class="border p-3 rounded mb-3" style="background: white; display: flex; flex-direction: row; justify-content: space-between;">';
            echo '<h4 class="fw-bolder ">' . $lawn_name . '</h4>';
                echo '<div>';
                    echo '<a href="area_info?lawn_name=Lawn+1" class="btn btn-sm btn-success me-2">Refresh</a>';
                    echo '<a href="lawn 1" class="btn btn-sm btn-success me-2">View Map</a>';
                    echo '<button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#addOwner">+ Add Owner</button>';
                echo '</div>';
            echo '</div>';
        } else {
            echo '<p>No lawn name available.</p>'; // Display a message if lawn name is empty
        }
    } else {
        echo '<p>No lawn name provided.</p>'; // Display a message if lawn name is not set in the GET parameters
    }
    ?>
    <div class="border p-3 rounded mb-3" style="background: white; height: auto">
        <div>
            <table id="property_table" class="display">
            <thead>
                <tr>
                    <th width="20%">Area</th>
                    <th width="20%">Block Number</th>
                    <th width="20%">Lot Number</th>
                    <th width="20%">Classification</th>
                    <th width="20%">Lot Owner</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addOwner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Lot Owner</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" id="date" class="form-control" placeholder="">
                                <label for="date">Date</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select id="classification" class="form-control" style="width: 100%;">
                                    <option value="Regular">Regular</option>
                                    <option value="Premium">Premium</option>
                                    <option value="Exterior">Exterior</option>
                                </select>
                                <label for="classification">Classification</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" id="block_number" class="form-control" placeholder="">
                                <label for="block_number">Block Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" id="lot_number" class="form-control" placeholder="">
                                <label for="lot_number">Lot Number</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-floating">
                    <input type="text" id="owner_name" class="form-control" placeholder="">
                    <label for="owner_name">Owner Name</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="btnAdd" type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>
<script src="../jquery/area_info.js"></script>

</div>
</body>
</html>
 