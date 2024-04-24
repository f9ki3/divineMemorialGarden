<html lang="en">
<?php include 'header.php'?>

<body>
<?php include 'navbar.php'?>

<div class="container">
<div id="getting_started" class="row text-secondary mt-5 w-100" >
    <div class="col-12 col-md-2">
        <h3 style="font-weight: bold;" class="mb-3">Search Filters</h3>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                </svg>
            </button>
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

    <div class="col-12 col-md-10">
        
            <h3 style="font-weight: bold;" class="mb-3">Recently Lot Sale Posted</h3>
            <hr>
            <div class="w-100 row text-secondary">
            <?php
include '../config/config.php';

$query = "SELECT * FROM property
            JOIN sell_bulletin ON property.id = sell_bulletin.bulletin_user_id
            JOIN users ON property.id = users.user_property_id
            WHERE lot_status = 1";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-12 col-md-4 p-2">
            <div class="border rounded p-3">
                <div>
                    <div class="d-flex justify-content-between">
                        <h4 class="fw-bold text-success">₱ <?php echo number_format($row['bulletin_price'], 2); ?></h4>
                        <?php
                        if ($row['bulletin_user_id'] == $property_id) {
                            // Condition when property_id matches $property_id
                        } else {
                            // Condition when property_id does not match $property_id
                            echo '<a class="message-trigger" data-user-id="' . $row['id'] . '" data-bs-toggle="modal" data-bs-target="#message">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                                        <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                                    </svg>
                                </a>';
                        }
                        ?>
                    </div>
                    <hr>
                    <h6 class="m-0 p-0">Owner: <?php echo $row['lot_owner']; ?></h6>
                    <p class="m-0 p-0">Lot: Block <?php echo $row['block_number']; ?> Lot <?php echo $row['lot_number']; ?></p>
                    <p class="m-0 p-0">Contact: <?php echo $row['bulletin_contact']; ?></p>
                    <p class="m-0 p-0">Email: <?php echo $row['bulletin_email']; ?></p>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    ?>
    <div style="height: 70vh; display: flex; flex-direction: column; justify-content: center; align-items: center" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="gainsboro" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
            <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06"/>
        </svg>
        <p class="text-center mt-5">No Post Yet</p>
    </div>
    <?php
}
?>

        
        <div class="w-100 d-flex justify-content-end mt-5">
                <!-- <a href="homepage" class="btn me-2 w-25  text-success border-success">View Map</a> -->
                <button class="btn w-25 border-success text-success me-2" onclick="submitForm()">Previous</button>
                <button class="btn w-25 btn-success" onclick="submitForm()">Next</button>
            </div>
            
            </div>
    </div>
    
</div>
</div>


<!-- Modal -->
<div class="modal fade mt-5" id="message" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" class="form-control mb-2" type="text" id="recieved_id" placeholder="Recipient ID">
        <input type="hidden" class="form-control mb-2" value="<?php echo $id;?>" type="text" id="sender_id" placeholder="Sender ID">
        <textarea class="form-control mb-2" id="message_content" cols="30" rows="5" maxlength="200" placeholder="Write your message"></textarea>
        <small id="charCount" class="form-text text-muted">Characters left: 200</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" onclick="send_message()">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="white" class="bi bi-cursor-fill" viewBox="0 0 16 16">
            <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
          </svg>
          Send
        </button>
      </div>
    </div>
  </div>
</div>

<?php include ('footer.php')?>
<script>
// JavaScript to handle click on message-trigger links
document.addEventListener('DOMContentLoaded', function() {
    const messageTriggers = document.querySelectorAll('.message-trigger');

    messageTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            const userId = this.getAttribute('data-user-id');
            const userIdInput = document.getElementById('recieved_id');
            userIdInput.value = userId;
            
        });
    });
});

function send_message() {
    var recieved_id = document.getElementById('recieved_id').value;
    var sender_id = document.getElementById('sender_id').value;
    var message_content = document.getElementById('message_content').value;

    // Validate message content
    if (message_content.trim() === '') {
      alertify.set('notifier','position', 'bottom-left');
      alertify.error('Empty Message');
      return;
    }

    // Perform character count
    var messageLength = message_content.length;
    var maxCharacters = 200;
    var charactersLeft = maxCharacters - messageLength;

    if (charactersLeft < 0) {
        alertify.set('notifier','position', 'bottom-left');
        alertify.error('Message Exceed to 200 characters');
      return;
    }

    // Example of using retrieved values
    console.log("Recipient ID: " + recieved_id);
    console.log("Sender ID: " + sender_id);
    console.log("Message Content: " + message_content);
    
    alertify.set('notifier','position', 'bottom-left');
    alertify.success('Message Sent');

    // Here you can perform AJAX request to send the message using retrieved values
    // For example:
    // ajaxSendMessage(recieved_id, sender_id, message_content);

    // Close the modal after processing
    var modalElement = document.getElementById('message');
    var modalInstance = bootstrap.Modal.getInstance(modalElement);
    modalInstance.hide();
  }

  // Update character count display on input change
  document.getElementById('message_content').addEventListener('input', function() {
    var messageLength = this.value.length;
    var maxCharacters = 200;
    var charactersLeft = maxCharacters - messageLength;
    var charCountElement = document.getElementById('charCount');
    charCountElement.textContent = "Characters left: " + charactersLeft;
  });
</script>


</body>
</html>
