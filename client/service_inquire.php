<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>
<?php
// Include configuration file
include '../config/config.php';

// Assuming $id is already defined

// Prepare SQL statement
$sql = "SELECT * FROM users JOIN property ON users.user_property_id = property.id WHERE users.id = ?";
$stmt = $conn->prepare($sql);

// Bind parameters and execute
$stmt->bind_param("i", $id);
$stmt->execute();

// Get result
$result = $stmt->get_result();

// Further processing...
// Assuming you fetch a single row based on the $id
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $classification= $row['classification'];
    $block= $row['block_number'];
    $lot= $row['lot_number'];
    $lot_status= $row['lot_status'];

} else {
   
}

?>


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
                        <label for="account_name">Account Name</label>
                        <input type="text" id="account_name" value="<?php echo $fname, ' ' , $lname?>" class="form-control" disabled>
                    </div>
                    <div class="w-50 ms-2">
                        <label for="grave_status">Classification</label>
                        <input type="text" id="grave_status" class="form-control" value="<?php echo $classification ?>" disabled>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <div class="w-50 ">
                        <label for="block_lot">Block and Lot</label>
                        <input type="text" id="block_lot" value="<?php echo 'Block', ' ', $block, ' Lot ', $lot?>" class="form-control" disabled>
                    </div>
                    <div class="w-50 ms-2">
                        <label for="lot_status">Lot Status</label>
                        <input type="text" id="lot_status"
                        value="
                        <?php
                        if($lot_status == 0){
                            echo'Owned';
                        }else{
                            echo'For Sale';
                        }
                        ?>
                        "
                        class="form-control" disabled>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <h5 class="fw-bold text-muted mt-2">Deceased Information</h5>
                    
                </div>
                <div class="d-flex mb-2">
                    <div class="w-50 ">
                        <label for="decease_name">Deceased Name</label>
                        <input type="text" id="decease_name" class="form-control" placeholder="Enter deceased name">
                    </div>
                    <div class="w-50 ms-2">
                        <label for="tier_type">Tier Type</label>
                        <select class="form-select" aria-label="Default select example" name="classification" id="tier_type" >
                            <option value="upper">Upper Tier</option>
                            <option value="lower">Lower Tier</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <div class="w-50">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" class="form-control" value="" >
                    </div>
                    <div class="w-50 ms-2">
                        <label for="dod">Date of Death</label>
                        <input type="date" id="dod" class="form-control" value="" >
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <div class="w-50">
                        <label for="date_service">Date of Service</label>
                        <input type="date" id="date_service" class="form-control" value="" >
                    </div>
                    <div class="w-50 ms-2">
                    </div>
                </div>
                <hr>
                <h5 class="fw-bold text-muted mt-2">Summary: PHP 24000</h5>
            </div>
            
            
        <div class="col-12 col-md-6">
        <div class="border rounded-3 shadow p-5">
            <h3 class="fw-bold text-muted">Payment Details</h3>
            <hr>
            <label for="payment_method">Select Payment Method</label>
            <select class="form-select mb-3" aria-label="Default select example" name="classification" id="payment_method" >
                <option value="G-Cash">G-Cash</option>
                <option value="Maya">Maya</option>
                <option value="Bank Transfer">Bank Transfer</option>
            </select>
            <div class=" mb-3 border p-3 rounded-3">
                <div class="d-flex justify-content-center">
                    <img src="../uploads/qr.png" alt="">
                </div>
                <div class="d-flex mt-0 pt-0 justify-content-center">
                    <p>09120912091</p>
                </div>
            </div>
            <div class="mb-3">
                <label for="proof_of_payment" class="form-label">Attached proof of payment</label>
                <input class="form-control" type="file" id="proof_of_payment">
            </div>
            <button class="btn mb-3 btn-success w-100" onclick="proceed()">Proceed</button>
            <a href="homepage" class="btn border-success text-success w-100">Cancel</a>
        </div>
        </div>
    </div>
</div>
</div>

<?php include ('footer.php')?>
<script src="../jquery/payment.js"></script>
</body>

</html>
