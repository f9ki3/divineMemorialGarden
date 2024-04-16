<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>

<div id="getting_started" class="container text-secondary w-100  p-5 " >
    <h3 style="font-weight: bold;" class="mb-3">Recently Lot Sale Posted</h3>
    <hr>
    <div class="w-100 d-flex flex-row text-secondary">

        <div class="col-12 col-md-4 p-2">
            <div class="border rounded p-3">
                <div>
                    <h4 class="fw-bold text-success">PHP 20k - PHP 30k</h4>
                    <hr>
                    <h5 class="m-0 p-0">Owner: Juan Dela Cruz</h5>
                    <p class="m-0 p-0">Lot: Block 5 Lot C</p>
                    <p class="m-0 p-0">Contact: 09891298121</p>
                    <p class="m-0 p-0">Email: juan@gmail.com</p>
                    <hr>
                </div>
                <div>
                    <button class="btn border border-success text-success">View map</button>
                    <button class="btn btn-success">Inquire</button>
                </div>
            </div>
        </div>

    </div>
    
    <div class="w-100 d-flex justify-content-end mt-5">
        <!-- <a href="homepage" class="btn me-2 w-25  text-success border-success">View Map</a> -->
        <button class="btn w-25 btn-success" onclick="submitForm()">Next</button>
    </div>
    
    </div>

    
</div>

    <?php include ('footer.php')?>

</body>
</html>
