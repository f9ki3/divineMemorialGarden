<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>

<div class="container">
<h3 class="fw-bold mt-2">Service Transaction</h3 >
<hr>
<div >
    <div class="row mt-5">
            <div class="col-12 col-md-6">
            <div class="d-flex justify-content-between">
                    <h5 class="fw-bold text-muted">Account Information</h5>
                    
                </div>
                <div class="d-flex mb-2">
                    <div class="w-50 ">
                        <label for="lower_name">Account Name</label>
                        <input type="text" id="lower_name" class="form-control" placeholder="Enter deceased name">
                    </div>
                    <div class="w-50 ms-2">
                        <label for="lower_name">Account Name</label>
                        <input type="text" id="lower_name" class="form-control" placeholder="Enter deceased name">
                    </div>
                </div><div class="d-flex justify-content-between">
                    <h5 class="fw-bold text-muted mt-2">Deceased Information</h5>
                    
                </div>
                <div class="d-flex mb-2">
                    <div class="w-50 ">
                        <label for="lower_name">Deceased Name</label>
                        <input type="text" id="lower_name" class="form-control" placeholder="Enter deceased name">
                    </div>
                    <div class="w-50 ms-2">
                        <label for="lower_deceased_status">Tier Type</label>
                        <select class="form-select" aria-label="Default select example" name="classification" id="lower_deceased_status" >
                            <option value="Remains"' . ($row['grave_status'] == 'Remains' ? ' selected' : '') . '>Upper Tier</option>
                            <option value="Body"' . ($row['grave_status'] == 'Body' ? ' selected' : '') . '>Lower Tier</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <div class="w-50">
                        <label for="lower_dob">Date of Birth</label>
                        <input type="date" id="lower_dob" class="form-control" value="" >
                    </div>
                    <div class="w-50 ms-2">
                        <label for="lower_dod">Date of Death</label>
                        <input type="date" id="lower_dod" class="form-control" value="" >
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <div class="w-50">
                        <label for="lower_dob">Date of Service</label>
                        <input type="date" id="lower_dob" class="form-control" value="" >
                    </div>
                    <div class="w-50 ms-2">
                    </div>
                </div>
            </div>
            
        <div class="col-12 col-md-6">
        <div class="border rounded-3 shadow p-5">
            <h3 class="fw-bold text-muted">Payment Details</h3>
            <hr>
            <label for="lower_deceased_status">Select Payment Method</label>
            <select class="form-select mb-3" aria-label="Default select example" name="classification" id="lower_deceased_status" >
                <option value="Remains"' . ($row['grave_status'] == 'Remains' ? ' selected' : '') . '>G-Cash</option>
                <option value="Body"' . ($row['grave_status'] == 'Body' ? ' selected' : '') . '>Maya</option>
                <option value="Body"' . ($row['grave_status'] == 'Body' ? ' selected' : '') . '>Bank Transfer</option>
            </select>
            <div class=" mb-3 border p-3 rounded-3">
                <div class="d-flex justify-content-center">
                    <img src="../uploads/qr.png" alt="">
                </div>
            </div>
            <div class="d-flex mb-3  justify-content-between border p-3 rounded-3 text-secondary">
                <h3 class="fw-bold">For Payment: PHP 24,000.00</h3>
                <h3 class="fw-bold"></h3>
            </div>
            <button class="btn mb-3 btn-success w-100 btn-lg">Proceed</button>
            <button class="btn border-success text-success w-100 btn-lg">Cancel</button>
        </div>
        </div>
    </div>
</div>
</div>

    <?php include ('footer.php')?>

</body>

</html>
