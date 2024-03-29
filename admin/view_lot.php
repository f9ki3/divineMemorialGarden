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
    $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner FROM property WHERE id = ?";
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
    <h5 class="mt-5">Lot Information</h5>
    <div class="d-flex mb-3">
        <div class="w-50 m-1">
            <label for="address">Owner Name</label>
            <input type="text" id="address" class="form-control" value="<?php echo $property['lot_owner']; ?>" readonly>
        </div>
        <div class="w-50 m-1">
            <label for="address">Block & Lot</label>
            <input type="text" id="address" class="form-control" value="Block <?php echo $property['block_number']; ?> Lot <?php echo $property['lot_number']; ?>" readonly>
        </div>
        <!-- <div>
            <label for="address">Owner Name</label>
            <input type="text" id="address" class="form-control" value="Mike Will" readonly>
        </div> -->
    </div>
    <?php endforeach; ?>
    <h5>Upper Tier</h5>
    <div class="d-flex mb-3">
        <div class="w-50 m-1">
            <label for="address">Deceased Name</label>
            <input type="text" id="address" class="form-control" value="Juan Dela Cruz" readonly>
        </div>
        <div class="w-50 m-1">
            <label for="address"> Status</label>
            <input type="text" id="address" class="form-control" value="John Doe" readonly>
        </div>
    </div>
    <div class="d-flex mb-3">
        <div class="w-50 m-1">
            <label for="address">Date of Birth</label>
            <input type="date" id="address" class="form-control" value="Juan Dela Cruz" readonly>
        </div>
        <div class="w-50 m-1">
            <label for="address">Date of Death</label>
            <input type="date" id="address" class="form-control" value="John Doe" readonly>
        </div>
    </div>
    <h5>Lower Tier</h5>
    <div class="d-flex mb-3">
        <div class="w-50 m-1">
            <label for="address">Deceased Name</label>
            <input type="text" id="address" class="form-control" value="Juan Dela Cruz" readonly>
        </div>
        <div class="w-50 m-1">
            <label for="address"> Status</label>
            <input type="text" id="address" class="form-control" value="John Doe" readonly>
        </div>
    </div>
    <div class="d-flex mb-3">
        <div class="w-50 m-1">
            <label for="address">Date of Birth</label>
            <input type="date" id="address" class="form-control" value="Juan Dela Cruz" readonly>
        </div>
        <div class="w-50 m-1">
            <label for="address">Date of Death</label>
            <input type="date" id="address" class="form-control" value="John Doe" readonly>
        </div>
    </div>
</div>
</body>
</html>