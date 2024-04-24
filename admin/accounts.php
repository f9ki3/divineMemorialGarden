<html lang="en">
<?php include 'header.php'; ?>
<body>
<div>
<?php include 'navbar.php'; ?>
<div class="container w-100 p-3">
    <div class="d-flex justify-content-between">
        <div> 
            <button class="btn btn-success btn-sm">Clients</button>
            <button class="btn border-success text-success btn-sm">Visitors</button>
            <button class="btn border-success text-success btn-sm">Admin</button> 
        </div>     
        
        <div>
            <button class="btn border-success text-success btn-sm" data-bs-toggle="modal" data-bs-target="#create">+ Create</button>
        </div>
    </div>
    <div class="mt-3">
        <table id="client" class="stripe " style="width:100%">
            <thead>
                <tr>
                    <th style="width: 5%">Date Added</th>
                    <th style="width: 20%">Profile</th>
                    <th style="width: 10%">First Name</th>
                    <th style="width: 10%">Last Name</th>
                    <th style="width: 10%">Email</th>
                    <th style="width: 10%">Contact</th>
                    <th style="width: 10%">Username</th>
                    <th style="width: 20%">Action</th>
                </tr>
            </thead>
        </table>

    </div>
</div>


<!-- Modal -->
<div class="modal mt-5 fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Client Account</h1>
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

$(document).ready(function() {
    var table = $('#client').DataTable({
        "ajax": {
            "url": "../php/fetch_account_client_data.php",
            "dataSrc": ""
        },
        "columns": [
            { 
                "data": "user_date_added", 
                "width": "15%",  // Set width for user_date_added column
                "render": function(data) {
                    return data ? data : "-";  // If data is empty, display "-"
                }
            },
            { 
                "data": null,
                "render": function(data, type, row) {
                    var profileImage = row.user_profile ? '<img style="width: 50px; height: 50px; border-radius: 100%" src="../uploads/' + row.user_profile + '">' : '-';
                    return profileImage;
                },
                "width": "12%"  // Set width for profile image column
            },
            { 
                "data": "user_fname", 
                "width": "10%",  // Set width for user_fname column
                "render": function(data) {
                    return data ? data : "-";
                }
            },
            { 
                "data": "user_lname", 
                "width": "10%",  // Set width for user_lname column
                "render": function(data) {
                    return data ? data : "-";
                }
            },
            { 
                "data": "user_email", 
                "width": "15%",  // Set width for user_email column
                "render": function(data) {
                    return data ? data : "-";
                }
            },
            { 
                "data": "user_contact", 
                "width": "10%",  // Set width for user_contact column
                "render": function(data) {
                    return data ? data : "-";
                }
            },
            { 
                "data": "user_name", 
                "width": "10%",  // Set width for user_name column
                "render": function(data) {
                    return data ? data : "-";
                }
            },
            {
                "data": null,
                "render": function(data, type, row) {
                    return '<div class="action-buttons">' +
                           '<button class="btn-accept btn btn-success btn-sm me-2" data-userid="' + row.id + '">Accept</button>' +
                           '<button class="btn-delete btn btn-danger btn-sm" data-userid="' + row.id + '">Cancel</button>' +
                           '</div>';
                },
                "width": "15%"  // Set width for action buttons column
            }
        ]
    }); 
});




</script>

<?php include 'footer.php'?>
</div>
</body>
</html>
 