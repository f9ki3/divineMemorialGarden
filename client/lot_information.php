<html lang="en">
<?php 
include '../config/config.php';
include 'header.php'
?>
<?php
            // Assuming $user_property_id is safely provided
            $id = intval($user_property_id); // Sanitize $user_property_id to ensure it's an integer

            $sql = "SELECT id, date, area, block_number, lot_number, classification, lot_owner, request_status, map_img
                    FROM property
                    WHERE id = ?";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                $stmt->bind_param("i", $id);
                $stmt->execute();

                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    // Fetch the first row only (assuming one row per $id)
                    $row = $result->fetch_assoc();
                    $id = $row['id'];
                    $date = $row['date'];
                    $area = $row['area'];
                    $block_number = $row['block_number'];
                    $lot_number = $row['lot_number'];
                    $classification = $row['classification'];
                    $lot_owner = $row['lot_owner'];
                    $lot_status = $row['request_status'];
                    $map_img = $row['map_img'];

                    // Use the fetched values as needed
                    // Example: echo $id, $date, $area, $lot_owner;

                } else {
                    // No rows found based on the provided $id
                    // Handle the case where no matching records are found
                    $id = "N/A";
                    $date = "N/A";
                    $area = "N/A";
                    $block_number = "N/A";
                    $lot_number = "N/A";
                    $classification = "N/A";
                    $lot_owner = "N/A";
                    $lot_status = "N/A";
                    $map_img = "N/A";
                }
            } else {
                echo "Error in preparing SQL statement: " . $conn->error;
            }

            // Close the prepared statement
            $stmt->close();
            ?>

<body>
<?php include 'navbar.php'?>

<div id="getting_started" class="container text-secondary w-100  p-5 " >
    <h3 style="font-weight: bold;" class="mb-3">My Lot Information</h3>
    
    <div class="row">
        <div class="col-12 col-md-6 p-2">
            <div class="rounded  border text-dark border-success pt-5 pb-5 border p-3 bg-light" >
                <div class="w-100 d-flex flex-row justify-content-between">
                    <p class="m-0">Account Name</p>
                    <p class="m-0"><?php  echo 'Block', $block_number, 'Lot', $lot_number?></p>
                </div>
                <h1 class="fw-bolder m-0 mb-4"><?php echo $fname,' ', $lname?></h1>
                <div class="w-100 d-flex flex-row justify-content-between">
                    <button class="btn border border-success text-success" style="width: 49%">View Map</button>
                    <button class="btn btn-success" style="width: 49%" data-bs-toggle="modal" data-bs-target="#request" 
                    <?php 
                    $sql = "SELECT request_status FROM property WHERE id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $property_id); // Assuming $id is an integer
                    $stmt->execute();
                    $stmt->bind_result($lot_status);

                    // Fetch the result
                    $stmt->fetch();

                    // Check the value of lot_status
                    if ($lot_status == 0) {
                        // lot_status is 0, so echo an empty string (do nothing)
                        echo 'enabled';
                    } else {
                        // lot_status is not 0, so echo 'disabled'
                        echo 'disabled';
                    }
                    ?>
                    >Request to Sell</button>
                </div>
            </div>
            <?php
                // Assuming $id is safely provided, use prepared statement to avoid SQL injection
                $id = intval($user_property_id); // Sanitize $id to ensure it's an integer
                include '../config/config.php';
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
                    <div  style="width: 100%; height: 200px; height: 250px">
                        <?php
                        // Assuming $map is a variable that holds the image filename/path

                            if (!empty($map)) {
                                echo '<img style="object-fit: cover; height: 100%; width: 100%" src="../uploads/' . htmlspecialchars($map) . '" alt="">';
                            }else{
                                echo'
                                <img style="object-fit: cover; height: 100%; width: 100%"  alt="No Image Yet">
                                ';
                            }
                        ?>

                    </div>
                </div>

        </div>

        <div class="col-12 col-md-6 p-2">
        <div class="p-3 border mb-3 rounded">
            <!-- HTML Output -->
            <p class="fw-bold">Lot Information</p>

            <?php if ($result->num_rows > 0) : ?>
                <div class='d-flex justify-content-between'>
                    <div class='w-75'>
                        <p class="p-0 m-0">Owner Name</p>
                        <p><?php echo $lot_owner ?></p>
                    </div>
                    <div class='w-25'>
                        <p class="p-0 m-0">Grave Status</p>
                        <p><?php echo $classification ?></p>
                    </div>
                </div>
                <div class='d-flex justify-content-between'>
                    <div class='w-75'>
                        <p class="p-0 m-0">Location</p>
                        <p><?php  echo 'Block', $block_number, 'Lot', $lot_number?></p>
                    </div>
                    <div class='w-25'>
                        <p class="p-0 m-0">Lot Status</p>
                        <?php 
                        if($lot_status == 0){
                            echo '<span class="badge text-bg-light border border-success text-success">Owned</span>';
                        }else{
                            echo '<span class="badge text-bg-light border border-danger text-danger">For Sale</span>';
                        }
                        ?>
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
            <div class="p-3 border rounded">
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
                    $dod = $row['dod']; // Assuming 'date_of_death' field name


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
            <div class="p-3 mt-3 border rounded">
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
                    $dod = $row['dod']; // Assuming 'date_of_death' field name


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

<!-- Modal -->
<div class="modal fade mt-5" id="request" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Request to Sell</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group mb-3" style="width: 100%">
            <label for="price">Selling Price</label>
            <input id="price" type="text" class="form-control " placeholder="0">
        </div>
        <div class="form-group mb-3" style="width: 100%">
            <label for="contact_seller">Contact</label>
            <input id="contact_seller" type="text" class="form-control " placeholder="Enter your contact number">
        </div>
        <div class="form-group mb-3" style="width: 100%">
            <label for="email">E-mail</label>
            <input id="email" type="email" class="form-control " placeholder="Enter your email address">
        </div>
        <div class="form-group mb-3" style="width: 100%">
            <label for="note">Select Offer Type</label>
            <select class="form-control" name="" id="offer" class="">
                <option value="Negotiable">Negotiable</option>
                <option value="Fixed Price">Fixed Price</option>
            </select>
        </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Confirm</button>
      </div>
    </div>
  </div>
</div>

    <?php include ('footer.php')?>

</body>

<!-- Add a script tag at the end of your HTML body to include the JavaScript code -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const confirmButton = document.querySelector('#request .modal-footer .btn-success');

  confirmButton.addEventListener('click', function() {
    const priceInput = document.querySelector('#price');
    const contactInput = document.querySelector('#contact_seller');
    const emailInput = document.querySelector('#email');
    const offerInput = document.querySelector('#offer');

    const priceValue = priceInput.value.trim();
    const contactValue = contactInput.value.trim();
    const emailValue = emailInput.value.trim();
    const offerValue = offerInput.value.trim();

    clearErrors();

    if (!/^\d+$/.test(priceValue)) {
      showError(priceInput, 'Please enter a valid number for Price.');
      return;
    }

    if (!/^\d{11}$/.test(contactValue)) {
      showError(contactInput, 'Please enter an 11-digit number for Contact.');
      return;
    }

    if (!isValidEmail(emailValue)) {
      showError(emailInput, 'Please enter a valid email address.');
      return;
    }

    const formData = new FormData();
    formData.append('id', '<?php echo $id?>');
    formData.append('propertyId', '<?php echo $property_id ?>'); // Include the PHP variable $id
    formData.append('price', priceValue);
    formData.append('contact_seller', contactValue);
    formData.append('email', emailValue);
    formData.append('offer', offerValue);

    fetch('../php/insert_bulletin.php', {
      method: 'POST',
      body: formData
    })
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok.');
      }
      return response.text();
    })
    .then(data => {
      console.log(data); // Log response from PHP script
      // Display success notification
      alertify.set('notifier','position', 'bottom-left');
      alertify.success('Requested Success');
      // Redirect to 'lot_information.php' after 3 seconds
      setTimeout(function() {
        window.location.href = 'lot_information.php';
      }, 3000);
    })
    .catch(error => {
      console.error('Error:', error); // Log any fetch errors
    });

    clearFormFields();
    hideModal();
  });

  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }

  function showError(inputElement, errorMessage) {
    inputElement.classList.add('is-invalid');
    const errorElement = document.createElement('div');
    errorElement.className = 'invalid-feedback';
    errorElement.textContent = errorMessage;
    inputElement.parentNode.appendChild(errorElement);
    inputElement.focus();
  }

  function clearErrors() {
    const invalidInputs = document.querySelectorAll('.is-invalid');
    invalidInputs.forEach(input => {
      input.classList.remove('is-invalid');
      const errorElement = input.parentNode.querySelector('.invalid-feedback');
      if (errorElement) {
        errorElement.remove();
      }
    });
  }

  function clearFormFields() {
    const inputs = ['#price', '#contact', '#email', 'offer'];
    inputs.forEach(input => {
      document.querySelector(input).value = '';
    });
  }

  function hideModal() {
    const modalElement = document.querySelector('#request');
    const modalInstance = bootstrap.Modal.getInstance(modalElement);
    modalInstance.hide();
  }
});
</script>


</html>
