<html lang="en">
<?php include 'header.php'; ?>
<body>
<div>
<?php include 'navbar.php'; ?>
<div class="container w-100 p-3">
    
            <div class="border p-3 rounded mb-3" style="background: white; display: flex; flex-direction: row; justify-content: space-between;">
            <h3 class="fw-bolder ">Accounts</h3>
                <div>
                    <button class="btn btn-sm btn-success me-2" data-bs-toggle="modal" data-bs-target="#create">Create Account</button>
                    
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

<!-- Modal -->
<div class="modal mt-5 fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Account</h1>
        <button id="close" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
                <!-- Sample Data -->
                <input class="form-control" placeholder="Search owner" list="users" id="searchInput">
                <datalist id="users">
                    <?php 
                    include '../config/config.php';
                    // SQL query to fetch user first name and last name
                    $sql = "SELECT * FROM property";
                    $result = $conn->query($sql);

                    // Output options based on query result
                    if ($result->num_rows > 0) {
                        // Loop through each row of data
                        while ($row = $result->fetch_assoc()) {
                            $lot_owner = $row["lot_owner"];
                            $id = $row["id"];
                            // Output option element with user's full name
                            echo '<option value="' . htmlspecialchars($id) . '-'. htmlspecialchars($lot_owner) . '">';
                        }
                    }
                    ?>
                </datalist>

                <p class="p-0 m-0">Username</p>
                <input type="text" id="usernameInput" placeholder="Enter owner username" class="form-control mb-2" disabled>
                <p class="p-0 m-0">Password</p>
                <div class="input-group mb-2">
                    <input type="password" id="passwordInput" placeholder="Enter owner password" class="form-control" disabled>
                </div>
                    <label for="showPasswordCheckbox" class="form-check-label me-2 mb-2">Show Password</label>
                    <input type="checkbox" id="showPasswordCheckbox" disabled onchange="togglePasswordVisibility()">
                <button id="generate" class="btn btn-light w-100 border" onclick="generatePassword()" disabled>Generate Password</button>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success" id="createButton" disabled>Create</button>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
<script src="../jquery/area_info.js"></script>
<script>
    // Function to enable/disable inputs and button based on selection
    document.getElementById('searchInput').addEventListener('input', function() {
        var selectedValue = this.value.trim();
        var usernameInput = document.getElementById('usernameInput');
        var passwordInput = document.getElementById('passwordInput');
        var generateButton = document.getElementById('generate'); 
        var showPasswordCheckbox = document.getElementById('showPasswordCheckbox');

        // Check if value is selected from datalist
        if (selectedValue !== '') {
            usernameInput.disabled = false;
            passwordInput.disabled = false;
            generateButton.disabled = false;
            showPasswordCheckbox.disabled = false;
        } else {
            usernameInput.disabled = true;
            passwordInput.disabled = true;
            generateButton.disabled = true;
            showPasswordCheckbox.disabled = true;
        }
    });

    // Function to clear usernameInput
    document.getElementById('close').addEventListener('click', function() {
        var searchInput = document.getElementById('searchInput');
        // Clear the value of usernameInput
        searchInput.value = '';
        usernameInput.disabled = true;
        passwordInput.disabled = true;
        generateButton.disabled = true;
        showPasswordCheckbox.disabled = true;
    });

    // Function to generate random password
    function generatePassword() {
        var passwordInput = document.getElementById('passwordInput');
        var password = '';

        // Generate 8-character random password
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < 8; i++) {
            password += characters.charAt(Math.floor(Math.random() * charactersLength));
        }

        // Set the generated password as the value of passwordInput
        passwordInput.value = password;
    }

    // Function to toggle password visibility
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById('passwordInput');
        var showPasswordCheckbox = document.getElementById('showPasswordCheckbox');

        // Check the state of the checkbox
        if (showPasswordCheckbox.checked) {
            // Show the password
            passwordInput.type = 'text';
        } else {
            // Hide the password
            passwordInput.type = 'password';
        }
    }

    // Wait for the DOM to fully load before running the script
    document.addEventListener('DOMContentLoaded', () => {
    const passwordInput = document.getElementById('passwordInput');
    const createButton = document.getElementById('createButton');
    const usernameInput = document.getElementById('usernameInput'); // Store the input element, not its value
    
    // Add an input event listener to the password input field
    passwordInput.addEventListener('input', () => {
        // Enable the button if the password input field is not empty
        if (passwordInput.value.trim() !== '') {
            createButton.removeAttribute('disabled');
        } else {
            createButton.setAttribute('disabled', 'true');
        }
    });

    // Add click event listener to the createButton
    createButton.addEventListener('click', () => {
        const username = usernameInput.value;
        const password = passwordInput.value;
        const searchInput = document.getElementById('searchInput').value;
        // Split the searchInput string by "-"
        const parts = searchInput.split('-');
        // Get the first value (first element of the parts array)
        const id = parts[0];

        // Check if username or password are empty
        if (username.trim() === '' || password.trim() === '') {
            alert('Please provide both username and password.');
            return;
        }

        // Check if password meets the minimum length requirement
        if (password.length < 6) {
            alert('Password must be at least 6 characters long.');
            return;
        }

        // Check if password contains at least one number and one alphabetic character
        const hasNumber = /\d/.test(password); // Check for at least one digit (0-9)
        const hasLetter = /[a-zA-Z]/.test(password); // Check for at least one letter (a-zA-Z)

        if (!hasNumber || !hasLetter) {
            alert('Password must contain at least one number and one alphabetic character.');
            return;
        }

        // If all validations pass, proceed to send data via AJAX
        const data = {
            id: id,
            username: username,
            password: password
        };

        // Send AJAX request to PHP script
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/create_owner.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText); // Output response from PHP script (for testing)
                // Handle response here if needed
            }
        };
        
        // Convert data object to URL-encoded string
        const encodedData = Object.keys(data).map(key => encodeURIComponent(key) + '=' + encodeURIComponent(data[key])).join('&');

        // Send the request
        xhr.send(encodedData);
    });
});




    
</script>
</div>
</body>
</html>
 