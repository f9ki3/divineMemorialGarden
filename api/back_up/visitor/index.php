<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>

<div id="terms"  class="container w-75 mb-5 mt-5 text-secondary">
        <h2 class="text-center " style="font-weight: bolder">Divine Memorial Garden</h2>
        <hr>
        <h5 class="text-center">Terms and Conditions</h5>
        <p>These terms and conditions govern the use of services provided by Divine Memorial Garden. By engaging our services, you agree to adhere to the following terms:</p>
        
        <h6>1.) Data Privacy and Protection:</h6>
        <ul style="text-align: justify">
            <li>Divine Memorial Garden complies with the Data Privacy Act of 2012. We are committed to protecting and using client-provided data solely for memorial-related purposes within our facility.</li>
        </ul>
        
        <h6>2.) Service Offerings and Pricing:</h6>

        <ul style="text-align: justify">
            <li>Senior Citizens: PHP 24,000 per burial service.</li>
            <li>Non-Senior Citizens: PHP 30,000 per burial service.</li>
            <li>An additional PHP 1,000 fee applies if the burial date falls on a weekend.</li>
        </ul>
        
        <h6>3.) Ownership and Documentation:</h6>
        <ul style="text-align: justify">
            <li>Notary and Investment Forms:
                <ul style="text-align: justify">
                    <li>Clients are required to complete and submit notary and investment forms.</li>
                    <li>These forms must be surrendered to the Divine Memorial Garden office if lot ownership is sold or transferred.</li>
                </ul>
            </li>
        </ul>
        
        <h6>4.) General Provisions:</h6>
        <ul style="text-align: justify">
            <li>Booking and Payment:
                <ul style="text-align: justify">
                    <li>To secure burial services, clients must book in advance and make the required payment.</li>
                    <li>Payments are non-refundable once services have been rendered, subject to applicable laws.</li>
                </ul>
            </li>
            <li>Lot Ownership:
                <ul style="text-align: justify">
                    <li>Clients must adhere to all terms related to lot ownership and usage within Divine Memorial Garden.</li>
                </ul>
            </li>
            <li>Jurisdiction:
                <ul style="text-align: justify">
                    <li>Any legal disputes shall be resolved under the jurisdiction of the local courts governing Divine Memorial Garden.</li>
                </ul>
            </li>
        </ul>
        
        <h6>5.)  Limitation of Liability:</h6>
        <ul>
            <li>Divine Memorial Garden is not liable for any loss, damage, or injury arising from the use of our services, unless due to our proven negligence.</li>
        </ul>
        
        <h6>6.) Reservation Rights:</h6>
        <ul>
            <li>Divine Memorial Garden reserves the right to refuse or cancel bookings at our discretion.</li>
        </ul>
        
        <h6>7.) Changes to Terms and Conditions:</h6>
        <ul>
            <li>Divine Memorial Garden may modify these terms and conditions at any time. Updated terms will be effective upon publication on our official platforms.</li>
        </ul>
        <hr>
        
        
        <div class="w-100 d-flex flex-column align-items-center justify-content-center ">
        <div class="form-check mt-4 ">
            <input class="form-check-input" type="checkbox" id="termsCheckbox">
            <label class="form-check-label" for="termsCheckbox">
                I have read and accept the Terms and Conditions
            </label>
        </div>
            <button id="acceptButton" disabled class="btn w-50 text-center btn-success mt-3" ">Accept and Proceed</button>
        </div>
    </div>

<div id="getting_started" class="container text-secondary w-100  p-5 " style="display: none">
    <h3 style="font-weight: bold;" class="mb-3">Getting Started</h3>
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
        <a href="homepage" class="btn me-2 w-25  text-success border-success">Skip</a>
        <button class="btn w-25 btn-success" onclick="submitForm()">Save</button>
    </div>
</div>

    <?php include ('footer.php')?>
    <script>
    function submitForm() {
    const inputFields = document.querySelectorAll('input');
    let isValid = true;
    let formData = {}; // Object to store field values
    let visitor_id = <?php echo json_encode($id); ?>; // Assuming $id is available in PHP

    inputFields.forEach(input => {
        const id = input.id;
        const value = input.value.trim();

        if (value === '') {
            input.style.border = '1px solid red';
            isValid = false;
        } else {
            input.style.border = '1px solid #ced4da';
        }

        switch (id) {
            case 'id':
            case 'fname':
            case 'lname':
                if (/\d/.test(value)) {
                    alert(`${id.toUpperCase()} cannot contain numbers.`);
                    input.style.border = '1px solid red';
                    isValid = false;
                }
                break;
            case 'contact':
                if (!(/^\d{11}$/.test(value))) {
                    input.style.border = '1px solid red';
                    isValid = false;
                }
                break;
            default:
                break;
        }

        // Store field value in formData object
        formData[id] = value;
    });

    if (isValid) {
        alertify.set('notifier', 'position', 'bottom-left');
        alertify.success('Successfully Submitted')
        console.log("Form Data:", formData); // Log all field values
        window.location.href = 'finish';
        // Include visitor_id in formData object
        formData['visitor_id'] = visitor_id;

        // Send formData object to PHP script using fetch API
        fetch('../php/visitor_info.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            console.log('Server Response:', data);
            // Handle response from server if needed
        })
        // .catch(error => {
        //     console.error('Error:', error);
        //     alert("Error occurred during form submission. Please try again.");
        // });
    } else {
        console.log("Form submission failed. Please correct errors.");
        alertify.set('notifier', 'position', 'bottom-left');
        alertify.error('Invalid Inputs');
    }
}


    document.addEventListener('DOMContentLoaded', function() {
    // Find the acceptButton element
    var acceptButton = document.getElementById('acceptButton');
    
    // Find the getting_started element
    var gettingStartedDiv = document.getElementById('getting_started');
    
    // Add a click event listener to the acceptButton
    acceptButton.addEventListener('click', function() {
        // When acceptButton is clicked, change the display style of getting_started
        gettingStartedDiv.style.display = 'block';
        document.getElementById('terms').style.display = 'none';
    });
});
</script>

</body>
</html>
