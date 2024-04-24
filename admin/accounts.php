<html lang="en">
<?php include 'header.php'; ?>
<body>
<div>
<?php include 'navbar.php'; ?>
<div class="container w-100 p-3">
    <button class="btn btn-sm btn-success me-2" data-bs-toggle="modal" data-bs-target="#create">Create Account</button>                
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

<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchInput');
    const usernameInput = document.getElementById('usernameInput');
    const passwordInput = document.getElementById('passwordInput');
    const generateButton = document.getElementById('generate');
    const showPasswordCheckbox = document.getElementById('showPasswordCheckbox');
    const createButton = document.getElementById('createButton');
    const closeBtn = document.getElementById('close');

    // Function to enable/disable inputs and button based on selection
    searchInput.addEventListener('input', () => {
        const selectedValue = searchInput.value.trim();
        usernameInput.disabled = selectedValue === '';
        passwordInput.disabled = selectedValue === '';
        generateButton.disabled = selectedValue === '';
        showPasswordCheckbox.disabled = selectedValue === '';

        if (selectedValue === '') {
            usernameInput.value = '';
            passwordInput.value = '';
            createButton.disabled = true;
        }
    });

    // Function to clear usernameInput
    closeBtn.addEventListener('click', () => {
        searchInput.value = '';
        usernameInput.value = '';
        passwordInput.value = '';
        generateButton.disabled = true;
        showPasswordCheckbox.disabled = true;
        createButton.disabled = true;
        
    });

    // Function to generate random password
    function generatePassword() {
        let password = '';
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        const charactersLength = characters.length;
        const passwordLength = 12; // Length of the generated password

        for (let i = 0; i < passwordLength; i++) {
            password += characters.charAt(Math.floor(Math.random() * charactersLength));
        }

        // Update the password input field
        passwordInput.value = password;

        // Enable the create button if it was previously disabled
        createButton.disabled = false;

        // Return the generated password (optional)
        return password;
    }


    // Function to toggle password visibility
    function togglePasswordVisibility() {
        passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
    }

    // Add event listeners
    passwordInput.addEventListener('input', () => {
        createButton.disabled = passwordInput.value.trim() === '';
    });

    generateButton.addEventListener('click', generatePassword);

    showPasswordCheckbox.addEventListener('change', togglePasswordVisibility);

    createButton.addEventListener('click', () => {
        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();
        const parts = searchInput.value.split('-');
        const id = parts[0];

        if (!username || !password) {
            alert('Please provide both username and password.');
            return;
        }

        if (username.length < 6 || !/\d/.test(username)) {
            alert('Username must be at least 6 characters long and contain at least one number.');
            return;
        }

        if (password.length < 6 || !/\d/.test(password) || !/[a-zA-Z]/.test(password)) {
            alert('Password must be at least 6 characters long and contain at least one number and one letter.');
            return;
        }
        
        const data = {
            id: id,
            username: username,
            password: password
        };

        
        alertify.set('notifier', 'position', 'bottom-left');
        alertify.success('Created Account Successfully');
        document.getElementById('close').click();

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/create_owner.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                    $('#create').modal('hide');
                } else {
                    console.error('Request failed with status:', xhr.status);
                }
            }
        };

        const encodedData = Object.keys(data).map(key => encodeURIComponent(key) + '=' + encodeURIComponent(data[key])).join('&');
        xhr.send(encodedData);
    });
});
</script>

<?php include 'footer.php'?>
</div>
</body>
</html>
 