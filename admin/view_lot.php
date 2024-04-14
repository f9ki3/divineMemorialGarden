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

<div class="container mt-2">
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
        <a href=""   style="text-decoration: none; color: gray">Edit</a>
    </div>
</div>


<script>
function edit_lot() {
    // Enable input fields
    document.getElementById('ownerName').disabled = false;
    document.getElementById('lotStatus').disabled = false;
    document.getElementById('classification').disabled = false;

    // Display the edit_lot_div
    document.getElementById('edit_lot_div').style.display = 'flex';
}




function cancel(){
    // Display the edit_lot_div
    document.getElementById('ownerName').disabled = true;
    document.getElementById('lotStatus').disabled = true;
    document.getElementById('classification').disabled = true;
    document.getElementById('edit_lot_div').style.display = 'none';
}
</script>

<?php include 'footer.php'?>
</body>
</html>