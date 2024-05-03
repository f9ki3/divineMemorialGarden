<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>
<?php
// Include configuration file
include '../config/config.php';

// Assuming $id is already defined
$rcv_id = $_GET['id'];
// Prepare SQL statement
$sql = "SELECT * FROM users JOIN property ON users.user_property_id = property.id WHERE users.id = ?";
$stmt = $conn->prepare($sql);

// Bind parameters and execute
$stmt->bind_param("i", $rcv_id);
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

<input id="seller" type="hidden" value="<?php echo $rcv_id?>">
<input id="buyer" type="hidden" value="<?php echo $id?>">
<div class="container">
<h3 class="fw-bold mt-2">Buy Lot Transaction</h3 >
<hr>
<div >
    <div class="row mt-5">
            <div class="col-12 col-md-6">
            <div class="d-flex justify-content-between">
                    <h5 class="fw-bold text-muted">Lot Transfer Information</h5>
                </div>
                <div class="d-flex mb-2">
                    <div class="w-50 ">
                        <label for="owner_name">New Owner Name</label>
                        <input type="text" id="owner_name" placeholder="Enter new owner" class="form-control" >
                    </div>
                    <div class="w-50 ms-2">
                        <label for="classification">Classification</label>
                        <input type="text" id="classification" class="form-control" value="<?php echo $classification ?>" disabled>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <div class="w-50 ">
                        <label for="address">Address</label>
                        <input type="text" id="address"  placeholder="Enter complete address" class="form-control" >
                    </div>
                    <div class="w-50 ms-2"> 
                        <label for="location">Block and Lot</label>
                        <input type="text" id="location" value="<?php echo 'Block', ' ', $block, ' Lot ', $lot?>" class="form-control" disabled>
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <div class="w-50 ">
                        <label for="contact">Contact</label>
                        <input type="text" id="contact"  placeholder="Enter contact number" class="form-control" >
                    </div>
                    <div class="w-50 ms-2"> 
                        <label for="email">Email</label>
                        <input type="text" id="email" placeholder="Enter email address" class="form-control" >
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <h5 class="fw-bold text-muted mt-2">Uploads</h5>
                    
                </div>
                <label for="decease_name" >Please upload clear photo (pdf / jpg) of the following:</label>
                <hr>
                <div class="d-flex mb-2">
                    <div class="w-100 ">
                        <label for="proof_of_lot_payment">Proof of lot payment (client or visitor)</label>
                        <input class="form-control w-100" type="file" id="proof_of_lot_payment">
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <div class="w-100 ">
                        <label for="deed_of_sales">Deed of Sales</label>
                        <input class="form-control w-100" type="file" id="deed_of_sales">
                    </div>
                </div>
                <div class="d-flex mb-2">
                    <div class="w-100 ">
                        <label for="authorization_letter">Authorization Letter</label>
                        <input class="form-control w-100" type="file" id="authorization_letter">
                    </div>
                </div>
                
            </div>
            
            
        <div class="col-12 col-md-6">
        <div class="border rounded-3 shadow p-4 pb-5">
            <h3 class="fw-bold text-muted">Processing Fee</h3>
            <hr>
            <p>Please pay, ₱ 4,000.00 for processing or transfer of ownership fee</p>
            <label for="payment_method">Select Payment Method</label>
            <select id="payment_method" class="form-select mb-3" >
                <option value="G-Cash">G-Cash</option>
                <option value="Maya">Maya</option>
                <option value="Bank Transfer">Bank Transfer</option>
            </select>
            <div class=" mb-3 border p-3 rounded-3" id="gcash">
                <div class="d-flex justify-content-center">
                    <img src="../uploads/qr.png" alt="">
                </div>
                <div class="d-flex mt-0 pt-0 justify-content-center">
                    <p>
                    <span><img src="../uploads/gcash.png" style="width: 100px;" alt=""></span>    
                    09120912091</p>
                </div>
            </div>
            <div class=" mb-3 border p-3 rounded-3" id="maya" style="display: none">
                <div class="d-flex justify-content-center">
                    <img src="../uploads/qr.png" alt="">
                </div>
                <div class="d-flex mt-0 pt-0 justify-content-center">
                    <p>
                    <span><img src="../uploads/maya.jpg" style="width: 50px; margin-right: 10px" alt=""></span>    
                    09320912091</p>
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
<script>
    // Wait for the document to be fully loaded
    $(document).ready(function() {
        // Add an event listener for changes to the payment method input
        $('#payment_method').change(function() {
            // Retrieve the value of the payment method input
            var payment_method = $(this).val();
            // Log the value to the console
            if(payment_method == 'G-Cash'){
                $('#gcash').show()
                $('#maya').hide()
            }else{
                $('#gcash').hide()
                $('#maya').show()

            }
        });
    });

    function proceed() {
    var seller = $('#seller').val();
    var buyer = $('#buyer').val();
    var ownerName = $('#owner_name').val();
    var classification = $('#classification').val();
    var address = $('#address').val();
    var location = $('#location').val();
    var contact = $('#contact').val();
    var email = $('#email').val();
    var proofOfLotPayment = $('#proof_of_lot_payment')[0].files[0]; // File object
    var deedOfSales = $('#deed_of_sales')[0].files[0]; // File object
    var authorizationLetter = $('#authorization_letter')[0].files[0]; // File object
    var paymentMethod = $('#payment_method').val();
    var proofOfPayment = $('#proof_of_payment')[0].files[0]; // File object

    // Regular expression patterns for validation
    var contactPattern = /^\d{11}$/; // 11 digits
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Email format

    // Check if required fields are empty
    if (ownerName === '' || classification === '' || address === '' || location === '' || contact === '' || email === '') {
        alertify.set('notifier','position', 'bottom-left');
        alertify.error('Please fill out all required fields.');
        return;
    }

    // Check if contact is in the correct format
    if (!contactPattern.test(contact)) {
        alertify.set('notifier','position', 'bottom-left');
        alertify.error('Please enter a valid 11-digit contact number.');
        return;
    }

    // Check if email is in the correct format
    if (!emailPattern.test(email)) {
        alertify.set('notifier','position', 'bottom-left');
        alertify.error('Please attach all required documents.');
        return;
    }

    // Check if any required files are not attached
    if (!proofOfLotPayment || !deedOfSales || !authorizationLetter || !proofOfPayment) {
        alertify.set('notifier','position', 'bottom-left');
        alertify.error('Please attach all required documents.');
        return;
    }

    // Create FormData object to hold the data
    var formData = new FormData();
    formData.append('seller', seller);
    formData.append('buyer', buyer);
    formData.append('ownerName', ownerName);
    formData.append('classification', classification);
    formData.append('address', address);
    formData.append('location', location);
    formData.append('contact', contact);
    formData.append('email', email);
    formData.append('paymentMethod', paymentMethod);
    formData.append('proofOfLotPayment', proofOfLotPayment);
    formData.append('deedOfSales', deedOfSales);
    formData.append('authorizationLetter', authorizationLetter);
    formData.append('proofOfPayment', proofOfPayment);

    // Send data via AJAX
    $.ajax({
        type: 'POST',
        url: '../php/insert_lot_transfer.php',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            // Handle success response here
            console.log(response);
            alertify.set('notifier','position', 'bottom-left');
            alertify.success('Buy Transaction Completed');
        },
        error: function(xhr, status, error) {
            // Handle error here
            console.error(xhr.responseText);
        }
    });
}

</script>

</body>

</html>
