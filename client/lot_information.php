<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>

<div id="getting_started" class="container text-secondary w-100  p-5 " >
    <h3 style="font-weight: bold;" class="mb-3">My Lot Information</h3>
    <!-- <div class="w-100 d-flex flex-row">
    
        <div class="w-50 p-2">
            <label for="inputPassword5" class="form-label">Lot Ownership</label>
            <input type="text" id="fname" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Juan Dela Cruz">
            
        </div>
        <div class="w-50 p-2">
            <label for="lname" class="form-label">Lot Status</label>
            <input type="text" id="lname" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Status">
            
        </div>
    </div>
    <div class="w-100 d-flex flex-row">
    
        <div class="w-50 p-2">
            <label for="contact" class="form-label">Block and Lot</label>
            <input type="text" id="contact" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Block and Lot">
            
        </div>
        <div class="w-50 p-2">
            <label for="address" class="form-label">Classification</label>
            <input type="text" id="address" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Classification">
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
            <input type="text" id="zipcode" class="form-control" aria-describedby="passwordHelpBlock" placeholder="ex. 3019"> -->
            <!-- <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long.
            </div> -->
        <!-- </div>

    </div>

    <div class="w-100 d-flex justify-content-end mt-5">
        <a href="homepage" class="btn me-2 w-25  text-success border-success">View Map</a>
        <button class="btn w-25 btn-success" onclick="submitForm()">Request to Sell</button>
    </div> -->
    <div class="row">
        <div class="col-12 col-md-6 p-2">
            <div class="rounded  border text-dark border-success pt-5 pb-5 border p-3 bg-light" >
                <div class="w-100 d-flex flex-row justify-content-between">
                    <p class="m-0">Account Name</p>
                    <p class="m-0">Block 5 Lot A</p>
                </div>
                <h1 class="fw-bolder m-0 mb-4"><?php echo $fname,' ', $lname?></h1>
                <div class="w-100 d-flex flex-row justify-content-between">
                    <button class="btn border border-success text-success" style="width: 49%">View Map</button>
                    <button class="btn btn-success" style="width: 49%">Request to Sell</button>
                </div>
            </div>
            <?php
                include '../config/config.php';
                // Assuming $id is safely provided, use prepared statement to avoid SQL injection
                $id = intval($user_property_id); // Sanitize $id to ensure it's an integer

                $sql = "SELECT * FROM property WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);
                $stmt->execute();

                $result = $stmt->get_result();

                // Assuming you fetch a single row based on the $id
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $map= $row['map_img'];

                } else {
                   
                }

                ?>

                <div class="rounded mt-3">
                    <p>Map Information</p>
                    <div  style="width: 100%; height: 200px">
                        <img style="object-fit: cover; height: 100%; width: 100%" src="../uploads/<?php echo htmlspecialchars($map); ?>" alt="">
                    </div>
                </div>

        </div>
        <div class="col-12 col-md-6 p-2">
            <div class="rounded  p-3 ">
                <p>Upper Tier Information</p>
                <h3 class="fw-bolder text-dark"><?php echo $fname,' ', $lname?></h3>
            </div>
            <div class="mt-3 rounded p-3 ">
                <p>Lower Tier Information</p>
                <h3 class="fw-bolder text-dark"><?php echo $fname,' ', $lname?></h3>
            </div>
        </div>
    </div>
</div>

    <?php include ('footer.php')?>

</body>
</html>
