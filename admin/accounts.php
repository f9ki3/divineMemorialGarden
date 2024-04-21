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
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
                <!-- Sample Data -->
                <input class="form-control" placeholder="Search owner" list="users" id="searchInput">
                <datalist id="users">
                    <?php 
                    include '../config/config.php';
                    // SQL query to fetch user first name and last name
                    $sql = "SELECT lot_owner FROM property";
                    $result = $conn->query($sql);

                    // Output options based on query result
                    if ($result->num_rows > 0) {
                        // Loop through each row of data
                        while ($row = $result->fetch_assoc()) {
                            $lot_owner = $row["lot_owner"];
                            // Output option element with user's full name
                            echo '<option value="' . htmlspecialchars($lot_owner) . '">';
                        }
                    }
                    ?>
                </datalist>

                <p class="p-0 m-0">Username</p>
                <input type="text" id="usernameInput" placeholder="Enter owner username" class="form-control mb-2" disabled>
                <p class="p-0 m-0">Password</p>
                <input type="password" id="passwordInput" placeholder="Enter owner password" class="form-control mb-2" disabled>
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

        // Check if value is selected from datalist
        if (selectedValue !== '') {
            usernameInput.disabled = false;
            passwordInput.disabled = false;
            generateButton.disabled = false;
        } else {
            usernameInput.disabled = true;
            passwordInput.disabled = true;
            generateButton.disabled = true;
        }
    });

    // Function to generate password (dummy function)
    function generatePassword() {
        alert('Password generated!');
    }
</script>
</div>
</body>
</html>
 