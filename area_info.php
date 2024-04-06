<html lang="en">
<?php include 'header.php'; ?>
<body>
<div>
<?php include 'navigation_bar.php'; ?>
<div class="container w-100 p-3">
    
            <div class="mt-2 mb-3" style="background: white; display: flex; flex-direction: row; justify-content: space-between;">
                <div>
                    <a href="area">Area</a> ><a href="area_info">Owner List</a> >
                </div>
                <div>
                    <a href="area_info?lawn_name=Lawn+1" class="btn btn-sm btn-success me-2">Refresh</a>
                    <a href="lawn 1" class="btn btn-sm btn-success me-2">View Map</a>
                    <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#addOwner">+ Add Owner</button>
                </div>
            </div>
        
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
<script src="jquery/area_info.js"></script>

</div>
</body>
</html>
 