<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>
<div id="getting_started" class="container text-secondary w-100" style="
position: fixed;
top: 85;
bottom: 0;
left: 0;
right: 0;
background-color: #ffffff; /* Set background color if needed */
overflow: hidden;
">
    <div class="row h-100">
        <div class="col-12 col-md-3 border p-3">
            <!-- Left column content (if needed) -->
            <div >
                <button style="width: 49%" class="btn btn-sm text-success border border-success">Inbox</button>
                <button style="width: 49%" class="btn btn-sm text-success border border-success">Sales</button>
            </div>
            <div style="height: 100vh" class="table-responsive scrollbar mx-n1 px-1">
                <div class="mt-3 d-flex flex-row">
                    <img src="../uploads/<?php echo $profile?>" style="hieght: 50px; width: 50px; border-radius: 100%" alt="">
                    <div class="ms-3 d-flex flex-column">
                        <h5 class="p-0 m-0 fw-bold">Stephanie Gandula</h5>
                        <p class="p-0 m-0">Sample data...</p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-12 col-md-9 h-100 d-flex flex-column justify-content-between p-3">
            <h3 style="font-weight: bold;" class="mb-3">Divine Memorial Office</h3>

            <div class="responsive overflow-auto" style="height: calc(100% - 60px);"><!-- Adjusted height -->
                <div class="w-100 d-flex flex-row mb-3">
                    <div class="w-100">
                        <div class="bg-light w-50 p-3 border rounded">
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

            <div class="w-100 mb-3 d-flex justify-content-between align-items-center ">
                <input type="text" class="form-control me-2 " placeholder="Write Message" style="height: 50px">
                <div class="d-flex flex-row" style="width: 30%">
                    <button class="btn btn-success w-50" onclick="submitForm()" style="height: 50px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                    <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                    </svg>
                    Send</button>
                    <button class="btn ms-2 btn-success w-50" onclick="submitForm()" style="height: 50px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill" viewBox="0 0 16 16">
                    <path d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223"/>
                    <path d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                    <path d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                    <path d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                    </svg>
                    Buy</button>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php include ('footer.php')?>

</body>
</html>
