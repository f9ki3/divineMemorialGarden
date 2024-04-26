<html lang="en">
<?php include 'header.php'?>
<body>
<?php include 'navbar.php'?>

<div class="container">
<div class="border rounded p-3 mt-3">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="mt-2 fw-bolder ">Contact information Maintenance</h5>
        <a style="text-decoration: none; color: gray" onclick="edit_contact()">Edit</a>
    </div>
    <hr class="m-0">
    <div class="d-flex ">
        <div class="w-50 m-2">
            <label for="c_name">Company name</label>
            <input type="text" id="c_name" class="form-control" value="" disabled>
        </div>
        <div class="w-50 m-2" role="alert">
            <label for="email">Cemetery Email Address</label> 
            <input type="text" id="email" class="form-control" value="" disabled>
        </div>
    </div>
    <div class="d-flex ">
        <div class="w-50 m-2">
            <label for="address">Address</label>
            <input type="text" id="address" class="form-control" value="" disabled>
        </div>
        <div class="w-50 m-2" role="alert">
            <label for="barangay">Barangay</label> 
            <input type="text" id="barangay" class="form-control" value="" disabled>
        </div>
    </div>
    <div class="d-flex ">
        <div class="w-50 m-2">
            <label for="municipal">Municipal</label>
            <input type="text" id="municipal" class="form-control" value="" disabled>
        </div>
        <div class="w-50 m-2" role="alert">
            <label for="province">Province</label> 
            <input type="text" id="province" class="form-control" value="" disabled>
        </div>
    </div>
    <div class="d-flex ">
        <div class="w-50 m-2">
            <label for="contact">Contact Number</label>
            <input type="text" id="contact" class="form-control" value="" disabled>
        </div>
        <div class="w-50 m-2" role="alert">
            <label for="link">Link</label> 
            <input type="text" id="link" class="form-control" value="" disabled>
        </div>
    </div>
    <div style="display: none" id="edit_contact">
        <div class="w-50 m-2">
        </div>
        <div class="w-100 m-2 d-flex justify-content-end">
            <button class="btn btn-danger w-25 me-2" onclick="cancel()">Cancel</button>
            <button class="btn btn-success w-25" onclick="save_contact()">Save</button>
        </div>
    </div>
</div>

<div class="border rounded p-3 mt-3">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="mt-2 fw-bolder ">Services Offers Maintenance</h5>
        <a style="text-decoration: none; color: gray" onclick="edit_lot()">+ Add</a>
    </div>
    <hr class="m-0">
    <div class="row p-2 mt-3">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div style="height: 200px;">
                  <img src="../uploads/g1.jpg" style="object-fit: cover; height: 100%; width: 100%" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Grave Maintenance</h5>
                    <p class="card-text">Professional care and maintenance of gravesites, including cleaning, landscaping, and upkeep.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div style="height: 200px;">
                  <img src="../uploads/g2.jpg" style="object-fit: cover; height: 100%; width: 100%" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Funeral Planning Services</h5>
                    <p class="card-text">Assistance in planning and organizing funeral services, including logistics, paperwork, and ceremony arrangements.</p>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div style="height: 200px;">
                  <img src="../uploads/g3.jpg" style="object-fit: cover; height: 100%; width: 100%" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Memorial Design and Installation</h5>
                    <p class="card-text">Customized memorial design and installation services, including headstones, plaques, and other commemorative structures.</p>
     
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'?>
<script>

function edit_contact(){
    $('#c_name').prop('disabled', false);
    $('#address').prop('disabled', false);
    $('#municipal').prop('disabled', false);
    $('#province').prop('disabled', false);
    $('#barangay').prop('disabled', false);
    $('#contact').prop('disabled', false);
    $('#link').prop('disabled', false);
    $('#email').prop('disabled', false);
    $('#telephone').prop('disabled', false);
    $('#edit_contact').show()
}

function cancel(){
    $('#c_name').prop('disabled', true);
    $('#address').prop('disabled', true);
    $('#municipal').prop('disabled', true);
    $('#province').prop('disabled', true);
    $('#barangay').prop('disabled', true);
    $('#contact').prop('disabled', true);
    $('#link').prop('disabled', true);
    $('#email').prop('disabled', true);
    $('#telephone').prop('disabled', true);
    $('#edit_contact').hide()
}
</script>
<script src="../jquery/update_contact.js"></script>
<script src="../jquery/fetch_contact.js"></script>
</body>
</html> 