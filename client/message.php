<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>

<div id="getting_started" class="container text-secondary w-100  p-5 " >
    <h3 style="font-weight: bold;" class="mb-3">Divine Memorial Office</h3>
    <div class="responsive" style="height: 450px; ">
        <div class="w-100 d-flex flex-row mb-3">
                <div class="w-100 ">
                    <div class="bg-light w-50 p-3 rounded">
                        Hello client what's your concern?
                    </div>
                </div>
        </div>
        <div class="w-100 d-flex flex-row mb-3">
                <div class="w-100 d-flex justify-content-end">
                    <div class="bg-success w-50 p-3 rounded text-light">
                        Hello may I request to transfer my lot ownership.
                    </div>
                </div>
        </div>
    </div>
    

    <div class="w-100 d-flex justify-content-end mt-5">
        <input type="text" class="form-control me-2" placeholder="Write Message" >
        <button class="btn w-25 btn-success" onclick="submitForm()">Send Message</button>
    </div>
</div>

    <?php include ('footer.php')?>

</body>
</html>
