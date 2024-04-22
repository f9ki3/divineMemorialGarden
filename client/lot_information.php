<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>

<div id="getting_started" class="container text-secondary w-100  p-5 " >
    <h3 style="font-weight: bold;" class="mb-3">My Lot Information</h3>
    
    <div class="row">
        <div class="col-12 col-md-6 p-2">
            <div class="rounded  border text-dark border-success pt-5 pb-5 border p-3 bg-light" >
                <div class="w-100 d-flex flex-row justify-content-between">
                    <p class="m-0">Account Name</p>
                    <p class="m-0">Block 5 Lot A</p>
                </div>
                <h1 class="fw-bolder m-0 mb-4"><?php echo $fname,' ', $lname?></h1>
                <div class="w-100 d-flex flex-row justify-content-between">
                    <button class="btn border border-success text-success" style="width: 49%">View Map</button>
                    <button class="btn btn-success" style="width: 49%">Request to Sell</button>
                </div>
            </div>
            <?php
                include '../config/config.php';
                // Assuming $id is safely provided, use prepared statement to avoid SQL injection
                $id = intval($user_property_id); // Sanitize $id to ensure it's an integer

                $sql = "SELECT * FROM property WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);
                $stmt->execute();

                $result = $stmt->get_result();

                // Assuming you fetch a single row based on the $id
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $map= $row['map_img'];

                } else {
                   
                }

                ?>

                <div class="rounded mt-3">
                    <p>Map Location</p>
                    <div  style="width: 100%; height: 200px">
                        <img style="object-fit: cover; height: 100%; width: 100%" src="../uploads/<?php echo htmlspecialchars($map); ?>" alt="">
                    </div>
                </div>

        </div>

        <div class="col-12 col-md-6 p-2">
        <div class="p-3 border border-success rounded">
            <?php
            // Assuming $user_property_id is safely provided
            $id = intval($user_property_id); // Sanitize $user_property_id to ensure it's an integer

            $sql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'upper'";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("i", $id);
                $stmt->execute();

                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    // Fetch the first row only (assuming one row per $id)
                    $row = $result->fetch_assoc();
                    $deceased_name = $row['deceased_name'];
                    $grave_status = $row['grave_status'];
                    $dob = $row['dob'];
                    $dod = $row['date_of_death']; // Assuming 'date_of_death' field name

                    // Use the fetched values as needed
                    // Example: echo $deceased_name;

                } else {
                    // No rows found based on the provided $id
                    // Handle the case where no matching records are found
                    $deceased_name = "N/A";
                    $grave_status = "N/A";
                    $dob = "N/A";
                    $dod = "N/A";
                }

            } else {
                echo "Error in preparing SQL statement: " . $conn->error;
            }

            ?>

            <!-- HTML Output -->
            <p class="fw-bold">Upper Tier Information</p>

            <?php if ($result->num_rows > 0) : ?>
                <div class='d-flex justify-content-between'>
                    <div class='w-75'>
                        <p class="p-0 m-0">Deceased Name</p>
                        <p><?php echo $deceased_name ?></p>
                    </div>
                    <div class='w-25'>
                        <p class="p-0 m-0">Grave Status</p>
                        <p><?php echo $grave_status ?></p>
                    </div>
                </div>
                <div class='d-flex justify-content-between'>
                    <div class='w-75'>
                        <p class="p-0 m-0">Date of Birth</p>
                        <p><?php echo $dob ?></p>
                    </div>
                    <div class='w-25'>
                        <p class="p-0 m-0">Date of Death</p>
                        <p><?php echo $dod ?></p>
                    </div>
                </div>
            <?php else : ?>
                <div class='d-flex justify-content-between'>
                    <div class='w-75'>
                        <p class="p-0 m-0">Deceased Name</p>
                        <p><?php echo $deceased_name ?></p>
                    </div>
                    <div class='w-25'>
                        <p class="p-0 m-0">Grave Status</p>
                        <p><?php echo $grave_status ?></p>
                    </div>
                </div>
                <div class='d-flex justify-content-between'>
                    <div class='w-75'>
                        <p class="p-0 m-0">Date of Birth</p>
                        <p><?php echo $dob ?></p>
                    </div>
                    <div class='w-25'>
                        <p class="p-0 m-0">Date of Death</p>
                        <p><?php echo $dod ?></p>
                    </div>
                </div>
            <?php endif; ?>

            </div>
            <div class="p-3 mt-3 border border-success rounded">
            <?php
            // Assuming $user_property_id is safely provided
            $id = intval($user_property_id); // Sanitize $user_property_id to ensure it's an integer

            $sql = "SELECT * FROM deceased_person WHERE property_id = ? AND deceased_type = 'lower'";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("i", $id);
                $stmt->execute();

                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    // Fetch the first row only (assuming one row per $id)
                    $row = $result->fetch_assoc();
                    $deceased_name = $row['deceased_name'];
                    $grave_status = $row['grave_status'];
                    $dob = $row['dob'];
                    $dod = $row['date_of_death']; // Assuming 'date_of_death' field name

                    // Use the fetched values as needed
                    // Example: echo $deceased_name;

                } else {
                    // No rows found based on the provided $id
                    // Handle the case where no matching records are found
                    $deceased_name = "N/A";
                    $grave_status = "N/A";
                    $dob = "N/A";
                    $dod = "N/A";
                }

                $stmt->close(); // Close prepared statement
            } else {
                echo "Error in preparing SQL statement: " . $conn->error;
            }

            $conn->close(); // Close database connection
            ?>

            <!-- HTML Output -->
            <p class="fw-bold">Lower Tier Information</p>

            <?php if ($result->num_rows > 0) : ?>
                <div class='d-flex justify-content-between'>
                    <div class='w-75'>
                        <p class="p-0 m-0">Deceased Name</p>
                        <p><?php echo $deceased_name ?></p>
                    </div>
                    <div class='w-25'>
                        <p class="p-0 m-0">Grave Status</p>
                        <p><?php echo $grave_status ?></p>
                    </div>
                </div>
                <div class='d-flex justify-content-between'>
                    <div class='w-75'>
                        <p class="p-0 m-0">Date of Birth</p>
                        <p><?php echo $dob ?></p>
                    </div>
                    <div class='w-25'>
                        <p class="p-0 m-0">Date of Death</p>
                        <p><?php echo $dod ?></p>
                    </div>
                </div>
            <?php else : ?>
                <div class='d-flex justify-content-between'>
                    <div class='w-75'>
                        <p class="p-0 m-0">Deceased Name</p>
                        <p><?php echo $deceased_name ?></p>
                    </div>
                    <div class='w-25'>
                        <p class="p-0 m-0">Grave Status</p>
                        <p><?php echo $grave_status ?></p>
                    </div>
                </div>
                <div class='d-flex justify-content-between'>
                    <div class='w-75'>
                        <p class="p-0 m-0">Date of Birth</p>
                        <p><?php echo $dob ?></p>
                    </div>
                    <div class='w-25'>
                        <p class="p-0 m-0">Date of Death</p>
                        <p><?php echo $dod ?></p>
                    </div>
                </div>
            <?php endif; ?>

            </div>
            
            
        </div>
        
    </div>
</div>

    <?php include ('footer.php')?>

</body>
</html>
