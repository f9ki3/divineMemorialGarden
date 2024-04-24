<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>

<div id="getting_started" class="row text-secondary w-100  p-5 " >
    <div class="col-12 col-md-2">
        <h3 style="font-weight: bold;" class="mb-3">Search Filters</h3>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn btn-success">Search</button>
        </div>
        <hr>
        <div class="mb-2">
            <p>Price Range</p>
            <div class="d-flex justify-content-center align-items-center">
                <input class="form-control me-2" type="text" placeholder="Min">-<input class="form-control ms-2" type="text" placeholder="Max">
            </div>
            <button class="btn btn-success border-success  w-100 mt-3">Apply</button>
            <button class="btn btn-light border-success text-success w-100 mt-3">Clear All</button>
        </div>
        <hr>
        <div class="mb-2">
            <p>Sort Bulletin</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sortRadio" id="sortByName" checked>
                <label class="form-check-label" for="sortByName">
                    Sort by Name
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sortRadio" id="sortByDate">
                <label class="form-check-label" for="sortByDate">
                    Sort by Date
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sortRadio" id="sortByPrice">
                <label class="form-check-label" for="sortByPrice">
                    Sort by Price
                </label>
            </div>
        </div>

    </div>

    <div class="col-12 col-md-9">
        
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
                            </div>
                        </div>    
                    </div>
                ';        
                }
            } else {
                echo '
                <div style="height: 70vh; display: flex; flex-direction: column; justify-content: center; align-items: center" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="gainsboro" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                        <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06"/>
                    </svg>
                    <p class="text-center mt-5">No Post Yet</p>
                </div>
                ';
            }
        ?>

            
            
            

                

            
            
            <div class="w-100 d-flex justify-content-end mt-5">
                <!-- <a href="homepage" class="btn me-2 w-25  text-success border-success">View Map</a> -->
                <button class="btn w-25 btn-success" onclick="submitForm()">Next</button>
            </div>
            
            </div>
    </div>
    
</div>

    <?php include ('footer.php')?>

</body>
</html>
