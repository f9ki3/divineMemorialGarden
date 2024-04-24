<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>

<div id="getting_started" class="container text-secondary w-100  p-5 " >
    <h3 style="font-weight: bold;" class="mb-3">Recently Lot Sale Posted</h3>
    <hr>
    <div class="w-100 row text-secondary">
    <?php
    include '../config/config.php';
    
    $query = "SELECT * FROM property
                JOIN sell_bulletin ON property.id = sell_bulletin.bulletin_user_id
                WHERE lot_status = 1 AND bulletin_user_id != $property_id";
    
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="col-12 col-md-4 p-2">
                <div class="border rounded p-3">
                    <div>
                        <h4 class="fw-bold text-success">₱ ' . number_format($row['bulletin_price'], 2) . '</h4>
                        <hr>
                        <h5 class="m-0 p-0">Owner: ' . $row['lot_owner'] . '</h5>
                        <p class="m-0 p-0">Lot: Block ' . $row['block_number'] . ' Lot ' . $row['lot_number'] . '</p>
                        <p class="m-0 p-0">Contact: ' . $row['bulletin_contact'] . '</p>
                        <p class="m-0 p-0">Email: ' . $row['bulletin_email'] . '</p>
                        <hr>
                    </div>
                    <div>
                        <button class="btn border border-success text-success">View map</button>
                        <button class="btn btn-success">Inquire</button>
                    </div>
                </div>    
            </div>
        ';        
        }
    } else {
        echo "No results found.";
    }
?>
    
    

        

    
    
    <div class="w-100 d-flex justify-content-end mt-5">
        <!-- <a href="homepage" class="btn me-2 w-25  text-success border-success">View Map</a> -->
        <button class="btn w-25 btn-success" onclick="submitForm()">Next</button>
    </div>
    
    </div>

    
</div>

    <?php include ('footer.php')?>

</body>
</html>
