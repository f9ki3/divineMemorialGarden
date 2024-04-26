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
        <a style="text-decoration: none; color: gray"  data-bs-toggle="modal" data-bs-target="#add_service"">+ Add</a>
        <!-- Modal -->
        <div class="modal mt-5 fade" id="add_service" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Service</h1>
                <button type="button" class="btn-close" id="close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <p class="mb-0">Service Title</p>
                    <input id="service_title" type="text" class="form-control" placeholder="Enter service title here">
                </div>
                <div class="mb-2">
                    <p class="mb-0">Service Fee Offer</p>
                    <input id="service_fee" type="text" class="form-control" placeholder="Enter service title here">
                </div>
                <div class="mb-2">
                    <p class="mb-0">Service Description</p>
                    <textarea name="" id="service_description" placeholder="Write description here" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="mb-2">
                    <p class="mb-2">Upload Cover Image</p>
                    <input type="file" id="service_cover">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="add()">Save</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    <hr class="m-0">
    <div class="services-container row p-2 mt-3">

        
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
<script src="../jquery/fetch_services.js"></script>
<script src="../jquery/add_service.js"></script>
<script src="../jquery/update_contact.js"></script>
<script src="../jquery/fetch_contact.js"></script>
</body>
</html> 