<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>


<div id="finish_div" class="container text-secondary w-100  p-5 " >
    <h3 style="font-weight: bold;" class="mb-3">Finish Setup</h3>
    <hr>
    <div class="row mt-5">
        <div class="col-12 col-md-6 d-flex justify-content-center">
            <div style="width: 250px; height: 250px" >
                <img src="../uploads/profile_dummy.jpg" id="profile" alt="" style="border-radius: 100%; object-fit: cover; width: 100%; height: 100%">
            </div>
        </div>
        <div class="col-12 col-md-6 d-flex flex-column pt-5">
                <div class="mb-3">
                    <label for="username"  class="form-label">Enter your prefer username</label>
                    <input class="form-control" id="username" type="text" placeholder="username">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Select profile picture</label>
                    <input  class="form-control" type="file" id="formFile">
                </div>
        </div>
        
    </div>
    <div class="w-100 d-flex justify-content-end mt-5 pt-5">
        <a href="homepage" class="btn me-2 w-25  text-success border-success">Skip</a>
        <button class="btn w-25 btn-success" onclick="finish()">Finish</button>
    </div>
    </div>

    
</div>

<?php include ('footer.php')?>
<script>
   async function finish() {
    const fileInput = document.getElementById('formFile');
    const usernameInput = document.getElementById('username');
    const visitor_id = <?php echo json_encode($id); ?>;
    
    const file = fileInput.files[0];
    const username = usernameInput.value.trim();

    if (!file) {
        showAlert('Select Image', 'error');
        return;
    }

    if (!username) {
        showAlert('Enter Username', 'error');
        return;
    }

    const formData = new FormData();
    formData.append('profileImage', file);
    formData.append('username', username);
    formData.append('visitor_id', visitor_id);

    // Log form data to console for debugging
    for (var pair of formData.entries()) {
        console.log(pair[0] + ', ' + pair[1]);
    }

    try {
        const response = await fetch('../php/save_profile.php', {
            method: 'POST',
            body: formData
        });

        if (response.ok) {
            showAlert('Finish Setup', 'success');
            setTimeout(function() {
                window.location.href = 'homepage'; // Replace 'homepage' with your actual URL
            }, 2000); 
        } else {
            showAlert('Failed to Save', 'error');
        }
    } catch (error) {
        console.error('Error:', error.message);
        showAlert('Server Error', 'error');
    }
}

function showAlert(message, type) {
    alertify.set('notifier', 'position', 'bottom-left');
    if (type === 'success') {
        alertify.success(message);
    } else if (type === 'error') {
        alertify.error(message);
    }
}

    // Function to handle file input change event
    function handleFileSelect(event) {
        const file = event.target.files[0]; // Get the selected file
        const imageType = /^image\//; // Regular expression to check image MIME type

        // Check if a file is selected and it's an image
        if (file && imageType.test(file.type)) {
            const reader = new FileReader();

            // Setup function to execute when file is loaded
            reader.onload = function (e) {
                const profileImage = document.getElementById('profile');
                profileImage.src = e.target.result; // Set image source to loaded file data
            };

            // Read the selected file as Data URL (base64 encoded string)
            reader.readAsDataURL(file);
        } else {
            // Handle case where selected file is not an image
            alertify.set('notifier', 'position', 'bottom-left');
            alertify.error('Invalid Image File')
        }
    }

    // Add event listener to file input (id="formFile")
    const fileInput = document.getElementById('formFile');
    fileInput.addEventListener('change', handleFileSelect);

    
</script>

</body>
</html>
