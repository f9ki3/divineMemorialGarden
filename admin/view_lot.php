<html lang="en">

<body>
<?php include 'header.php'?>
<?php include 'navbar.php'?>

<?php
include '../config/config.php';

// Check if id parameter is set and not empty
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch data from the database
    $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, lot_status FROM property WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if data exists
    if ($result->num_rows > 0) {
        // Store data in a variable
        $property_data = array();
        while ($row = $result->fetch_assoc()) {
            $property_data[] = $row;
        }
    } else {
        $property_data = array(); // If no data found, initialize empty array
    }
} else {
    // Handle case where id parameter is not set or empty
    $property_data = array();
}

?>

<div class="container mt-2 mb-5">
    <div class="d-flex justify-content-between">
        <div class="pt-3"><h3 class="fw-bold">View Lawn</h3></div>
        <div><a href="lawn 1" class="btn btn-primary mt-2 ms-2 btn-success" >Back</a><a href="area" class="btn btn-primary mt-2 ms-2 btn-success" >Back to Area</a></div>
    </div>
    <?php foreach ($property_data as $property): ?>
    <!-- <tr>
        <td><?php echo $property['id']; ?></td>
        <td><?php echo $property['date']; ?></td>
        <td><?php echo $property['area']; ?></td>
        <td></td>
        <td><?php echo $property['lot_number']; ?></td>
        <td><?php echo $property['classification']; ?></td>
    </tr> -->
    <hr>
    <div class="d-flex justify-content-between">
        <h5 class="mt-5">Lot Information</h5>
        <a class="mt-5"  style="text-decoration: none; color: gray" onclick="edit_lot()">Edit</a>
    </div>

    <div class="d-flex ">
        <div class="w-50 m-2">
            <label for="address">Owner Name</label>
            <input type="text" id="ownerName" class="form-control" value="<?php echo strtoupper($property['lot_owner']); ?>" oninput="this.value = this.value.toUpperCase();" disabled>
        </div>
        <div class="w-50 m-2" role="alert">
            <label for="status">Lot Status</label> 
            <?php
                // Assuming $property['lot_status'] holds the status value (0 or 1)
                $lotStatus = isset($property['lot_status']) ? $property['lot_status'] : 0;
            ?>
            <select class="form-select" aria-label="Default select example" name="lotStatus" id="lotStatus" disabled>
                <option value="0" <?php echo ($lotStatus == 0) ? 'selected' : ''; ?>>Sold</option>
                <option value="1" <?php echo ($lotStatus == 1) ? 'selected' : ''; ?>>For Sale</option>
            </select>
        </div>

        <!-- <div>
            <label for="address">Owner Name</label>
            <input type="text" id="address" class="form-control" value="Mike Will" disabled>
        </div> -->
    </div>
    <div class="d-flex">
    <div class="w-50 m-2">
        <label for="address">Block &amp; Lot</label>
        <input type="text" id="address" class="form-control" value="Block <?php echo htmlspecialchars($property['block_number']); ?> Lot <?php echo htmlspecialchars($property['lot_number']); ?>" disabled>
    </div>
    <div class="w-50 m-2">
        <label for="classification">Classification</label>
        <?php
            // Assuming $classification holds the classification value ('Premium' or 'Regular')
            $classification = isset($property['classification']) ? $property['classification'] : 'Premium'; // Default to 'Premium' if not set
        ?>
        <select class="form-select" aria-label="Default select example" name="classification" id="classification" disabled>
            <option value="Premium" <?php echo ($classification === 'Premium') ? 'selected' : ''; ?>>Premium</option>
            <option value="Regular" <?php echo ($classification === 'Regular') ? 'selected' : ''; ?>>Regular</option>
        </select>
    </div>

</div>

    <div style="display: none" id="edit_lot_div">
        <div class="w-50 m-2">
            
        </div>
        <div class="w-50 m-2 d-flex justify-content-end">
            <button class="btn btn-danger w-25 me-2" onclick="cancel()">Cancel</button>
            <button class="btn btn-success w-25" onclick="submit_lot()">Save</button>
        </div>
    </div>
    <?php endforeach; ?>
    
    <div class="d-flex justify-content-between">
        <h5>Upper Tier</h5>
        <a href=""   style="text-decoration: none; color: gray" >Edit</a>
    </div>
    <div class="d-flex ">
        <div class="w-50 m-2">
            <label for="address">Deceased Name</label>
            <input type="text" id="address" class="form-control" value="Juan Dela Cruz" disabled>
        </div>
        <div class="w-50 m-2">
            <label for="address"> Status</label>
            <input type="text" id="address" class="form-control" value="John Doe" disabled>
        </div>
    </div>
    <div class="d-flex ">
        <div class="w-50 m-2">
            <label for="address">Date of Birth</label>
            <input type="date" id="address" class="form-control" value="Juan Dela Cruz" disabled>
        </div>
        <div class="w-50 m-2">
            <label for="address">Date of Death</label>
            <input type="date" id="address" class="form-control" value="John Doe" disabled>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <h5>Lower Tier</h5>
        <a href=""   style="text-decoration: none; color: gray">Edit</a>
    </div>
    <div class="d-flex ">
        <div class="w-50 m-2">
            <label for="address">Deceased Name</label>
            <input type="text" id="address" class="form-control" value="Juan Dela Cruz" disabled>
        </div>
        <div class="w-50 m-2">
            <label for="address"> Status</label>
            <input type="text" id="address" class="form-control" value="John Doe" disabled>
        </div>
    </div>
    <div class="d-flex ">
        <div class="w-50 m-2">
            <label for="address">Date of Birth</label>
            <input type="date" id="address" class="form-control" value="Juan Dela Cruz" disabled>
        </div>
        <div class="w-50 m-2">
            <label for="address">Date of Death</label>
            <input type="date" id="address" class="form-control" value="John Doe" disabled>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <h5>Map Location</h5>
        <a   style="text-decoration: none; color: gray">Delete</a>
    </div>
    <div id="uploadContainer" style="height: 500px;" class=" border rounded d-flex flex-column justify-content-center align-items-center">
        <?php 
        // Prepare and execute SQL query to retrieve map_img based on $id
        $sql = "SELECT map_img FROM property WHERE id = $id";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            // Fetch the map_img value from the query result
            $row = $result->fetch_assoc();
            $map_img = $row["map_img"];

            // Check if map_img is not empty
            if (!empty($map_img)) {
                // Display the image
                echo '<img class="rounded" style="object-fit: cover; width: 100%; height: 100%" src="../uploads/' . $map_img . '" alt="Map Image">';
            } else {
                // Display a placeholder SVG if map_img is empty
                echo '
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="gray" class="bi bi-card-image" viewBox="0 0 16 16">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                        <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                    <!-- <p id="uploadText">+ Upload Map</p> -->
                    <input type="file" id="uploadText">';
            }
        } else {
            // Display a placeholder SVG if no result found for the given ID
            echo '
                <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="gray" class="bi bi-card-image" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z"/>
                </svg>
                <!-- <p id="uploadText">+ Upload Map</p> -->
                <input type="file" id="uploadText">';
        }

        // Close the database connection
        $conn->close();
        
        ?>
    </div>
    <div id="edit_map_img_div" style="display: none;">
    <div class="w-100 m-2 d-flex justify-content-center">
        <button class="btn btn-danger w-25 me-2" onclick="cancel()">Cancel</button>
        <button class="btn btn-success w-25" onclick="uploadFile()">Save</button>
    </div>
</div>

</div>

<script>
    // Function to check if file input has a file selected
function checkFile() {
    const fileInput = document.getElementById('uploadText');
    const editMapImgDiv = document.getElementById('edit_map_img_div');

    if (fileInput.files.length > 0) {
        // File is selected
        editMapImgDiv.style.display = 'flex';
    } else {
        // No file selected
        editMapImgDiv.style.display = 'none';
    }
}

// Attach an event listener to the file input to trigger the checkFile function on change
const fileInput = document.getElementById('uploadText');
fileInput.addEventListener('change', checkFile);

function uploadFile() {
    const fileInput = document.getElementById('uploadText');
    const file = fileInput.files[0];
    const id = <?php echo json_encode($id); ?>; // Assuming $id is defined in your PHP script

    if (!file) {
        alert('Please select a file.');
        return;
    }

    const formData = new FormData();
    formData.append('file', file);
    formData.append('id', id); // Append the id to the formData

    // Send the file and id to a PHP script using Fetch API
    fetch('upload.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(filename => {
        alertify.set('notifier','position', 'bottom-left'); // Set position of notifications
        alertify.success('Uploaded Success'); // Display success notification
        const editMapImgDiv = document.getElementById('edit_map_img_div');
        editMapImgDiv.style.display = 'none';
        // Delay the page reload by 2 seconds (2000 milliseconds)
        setTimeout(function() {
            location.reload();
        }, 2000);


    })
    .catch(error => {
        console.error('Error uploading file:', error);
    });
}

  
function edit_lot() {
    // Enable input fields
    document.getElementById('ownerName').disabled = false;
    document.getElementById('lotStatus').disabled = false;
    document.getElementById('classification').disabled = false;

    // Display the edit_lot_div
    document.getElementById('edit_lot_div').style.display = 'flex';
}

function submit_lot() {
    // Disable input fields
    document.getElementById('ownerName').disabled = true;
    document.getElementById('lotStatus').disabled = true;
    document.getElementById('classification').disabled = true;

    // Hide the edit_lot_div
    document.getElementById('edit_lot_div').style.display = 'none';

    // Retrieve values of input fields
    var id = <?php echo json_encode($id); ?>;
    var ownerNameValue = document.getElementById('ownerName').value;
    var lotStatusValue = document.getElementById('lotStatus').value;
    var classificationValue = document.getElementById('classification').value;

    // Prepare data object to send via AJAX
    var data = {
        id: id,
        ownerName: ownerNameValue,
        lotStatus: lotStatusValue,
        classification: classificationValue
    };

    // Make AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../php/edit_lot.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Request was successful
                console.log(xhr.responseText);
                alertify.set('notifier','position', 'bottom-left'); // Set position of notifications
                alertify.success('Update Success'); // Display success notification

                // Optionally, process response from edit_lot.php
            } else {
                // Request failed
                console.error('AJAX request failed');
            }
        }
    };
    
    // Convert data object to JSON before sending
    xhr.send(JSON.stringify(data));
}

function cancel() {
    // Hide the edit_map_img_div
    const editMapImgDiv = document.getElementById('edit_map_img_div');
    editMapImgDiv.style.display = 'none';

    // Reset the file input to remove the selected file
    const fileInput = document.getElementById('uploadText');
    fileInput.value = '';

    // Disable and hide other elements as needed
    document.getElementById('ownerName').disabled = true;
    document.getElementById('lotStatus').disabled = true;
    document.getElementById('classification').disabled = true;
    document.getElementById('edit_lot_div').style.display = 'none';
    document.getElementById('upload_map').style.display = 'none';

    // Reset uploadContainer to initial state
    const uploadContainer = document.getElementById('uploadContainer');

    // Show the "+ Upload Map" text
    const uploadText = uploadContainer.querySelector('#uploadText');
    uploadText.innerText = '+ Upload Map';

    // Show the uploadContainer content (svg and text)
    uploadContainer.style.display = 'flex';
}


</script>
<?php include 'footer.php'?>
</body>
</html>