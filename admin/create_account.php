<html lang="en">
<?php include 'header.php'; ?>
<body>
<div>
<?php include 'navbar.php'; ?>
<div class="container w-100 p-3">
    
    <div class=" mb-3" style="background: white; height: auto">
        <div>
            <h3 class="fw-bolder my-3 ">Create Owner Account</h3>
        </div>
        <div>
            <div class="d-flex flex-row mb-3 mt-5">
                <div class="form-floating px-1" style="width: 48%;">
                    <input type="text" id="fname" class="form-control" placeholder="">
                    <label for="fname">First Name</label>
                </div>
                <div class="form-floating px-1" style="width: 48%;">
                    <input type="text" id="fname" class="form-control" placeholder="">
                    <label for="fname">Last Name</label>
                </div>
            </div>
            <div class="d-flex flex-row mb-3">
                <div class="form-floating px-1" style="width: 32%;">
                    <input type="text" id="fname" class="form-control" placeholder="">
                    <label for="fname">Contact Number</label>
                </div>
                <div class="form-floating px-1" style="width: 32%;">
                    <input type="text" id="fname" class="form-control" placeholder="">
                    <label for="fname">Email Address</label>
                </div>
                <div class="form-floating px-1" style="width: 32%;">
                    <select name="" id="gender" class="form-control" placeholder="">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>
                    <label for="gender">Gender</label>
                </div>
            </div>
            <div class="d-flex flex-row mb-3">
                <div class="form-floating px-1" style="width: 96%;">
                    <input type="text" id="address" class="form-control" placeholder="">
                    <label for="address">Address</label>
                </div>
                
            </div>
            <div class="d-flex flex-row mb-3">
                <div class="form-floating px-1" style="width: 32%;">
                    <input type="text" id="uname" class="form-control" placeholder="">
                    <label for="uname">Username</label>
                </div>
                <div class="form-floating px-1" style="width: 32%;">
                    <input type="text" id="password" class="form-control" placeholder="">
                    <label for="password">Password</label>
                </div>
                <div class="form-floating px-1" style="width: 32%;">
                    <input type="password" id="cpasswword" class="form-control" placeholder="">
                    <label for="cpasswword">Confirm Password</label>
                </div>
            </div>
            

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
 