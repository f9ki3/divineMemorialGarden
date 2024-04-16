<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>

<div id="getting_started" class="container text-secondary w-100  p-5 " >
    <h3 style="font-weight: bold;" class="mb-3">Recently Lot Sale Posted</h3>
    <div class="w-100 d-flex flex-row">
    
        <div class="w-50 p-2">
            <label for="inputPassword5" class="form-label">First Name</label>
            <input type="text" id="fname" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Enter your first name">
            
        </div>
        <div class="w-50 p-2">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" id="lname" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Enter your last name">
            
        </div>

    </div>
    <div class="w-100 d-flex flex-row">
    
        <div class="w-50 p-2">
            <label for="contact" class="form-label">Contact Number</label>
            <input type="text" id="contact" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Enter Contact Number">
            
        </div>
        <div class="w-50 p-2">
            <label for="address" class="form-label">Home Address</label>
            <input type="text" id="address" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Enter your home address, block and lot, subdivision">
            
        </div>

    </div>
    <div class="w-100 d-flex flex-row">
    
        <div class="w-50 p-2">
            <label for="barangay" class="form-label">Barangay</label>
            <input type="text" id="barangay" class="form-control" aria-describedby="passwordHelpBlock" placeholder="ex. Loma De Gato">
            
        </div>
        <div class="w-50 p-2">
            <label for="municipal" class="form-label">Municipal / City</label>
            <input type="text" id="municipal" class="form-control" aria-describedby="passwordHelpBlock" placeholder="ex. Marilao">
            
        </div>

    </div>
    <div class="w-100 d-flex flex-row">
    
        <div class="w-50 p-2">
            <label for="province" class="form-label">Province</label>
            <input type="text" id="province" class="form-control" aria-describedby="passwordHelpBlock" placeholder="ex. Bulacan">
            
        </div>
        <div class="w-50 p-2">
            <label for="zipcode" class="form-label">Zip Code</label>
            <input type="text" id="zipcode" class="form-control" aria-describedby="passwordHelpBlock" placeholder="ex. 3019">
            <!-- <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long.
            </div> -->
        </div>

    </div>

    <div class="w-100 d-flex justify-content-end mt-5">
        <!-- <a href="homepage" class="btn me-2 w-25  text-success border-success">View Map</a> -->
        <button class="btn w-25 btn-success" onclick="submitForm()">Next</button>
    </div>
</div>

    <?php include ('footer.php')?>

</body>
</html>