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
                <a href="message" style="width: 49%" class="btn btn-sm text-success border border-success">Support</a>
            </div>
            <div style="height: 100vh" class="table-responsive scrollbar mx-n1 px-1">
                <div id="message_container"></div>
            </div>
        </div>
        <div class="col-12 col-md-9 h-100 d-flex flex-column justify-content-between p-3">

            <h3 style="font-weight: bold;" class="mb-0" id='user'>Divine Memorial</h3>
    <hr>
    <div class="w-100 d-flex justify-content-between">
        <div id='offer_div'>
        
        </div>
        
    </div>
    <hr>
            <div class="responsive overflow-auto" style="height: calc(100% - 60px);" id="messageContainer">
                <div id="message_open"></div>
            </div>
            
            <!-- <h3 style="font-weight: bold;" class="mb-3">${message.user_fname} ${message.user_lname}</h3> -->

            <div class="w-100 mb-3 d-flex justify-content-between align-items-center ">
                <input id="recieved_id" type="hidden" class="form-control mb-2" type="text" placeholder="Recipient ID">
                <input value="<?php echo $id;?>" type="hidden" class="form-control mb-2" type="text" id="sender_id" placeholder="Sender ID">
                <input id="message_content" type="text" class="form-control me-2 " placeholder="Write Message" style="height: 50px">
                <div class="d-flex flex-row" style="width: 60%">
                    <button id="send_message" class="btn btn-light border w-50" onclick="send_message()" style="height: 50px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                    <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                    </svg>
                    Send</button>
                    <!-- <button class="btn btn-light border ms-2 btn-success w-50" onclick="submitForm()" style="height: 50px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
                    <path d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8m5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707z"/>
                    </svg>
                    Offer</button> -->
                    <a href="buy_lot_transaction" class="btn btn-light border ms-2 btn-success w-50" onclick="submitForm()" style="padding-top: 12px; height: 50px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill" viewBox="0 0 16 16">
                    <path d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223"/>
                    <path d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                    <path d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                    <path d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                    </svg>
                    Process</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include ('footer.php')?>
<script>
$(document).ready(function() {
    // Function to load and display messages
    function loadMessages() {
        $.ajax({
            url: "../php/message_selection.php",
            method: "GET",
            dataType: "json",
            success: function(response) {
                if (response && response.length > 0) {
                    // Clear existing messages
                    $('#message_container').empty();

                    // Loop through each message in the response
                    response.forEach(function(message) {
    function truncateMessage(messageContent, maxLength) {
        // Check if messageContent is longer than maxLength
        if (messageContent.length > maxLength) {
            // Truncate the message to maxLength characters
            const truncatedMessage = messageContent.substring(0, maxLength) + '...';
            return truncatedMessage;
        } else {
            // If messageContent is within the maxLength limit, return it as is
            return messageContent;
        }
    }

    const maxLength = 60;
    const truncatedMessage = truncateMessage(message.message_content, maxLength);
    
    // Construct HTML for each message
    var messageHtml = `
        <a class="view_message text-decoration-none text-muted" data-receiver-id="${message.reciever_id}" data-user_fname="${message.user_fname}" data-user_lname="${message.user_lname}">
            <div class="message rounded border p-2 mt-2 d-flex flex-row">
                <img src="../uploads/${message.user_profile}" style="height: 50px; width: 50px; border-radius: 100%;" alt="">
                <div class="ms-3 d-flex flex-column">
                    <h5 class="p-0 m-0 fw-bold">${message.user_fname} ${message.user_lname}</h5>
                    <p class="p-0 m-0" style="font-size: 12px">${truncatedMessage}</p>
                </div>
            </div>
        </a>
    `;
    // Append the message HTML to the message container
    $('#message_container').append(messageHtml);
});

                }
            },
            error: function(xhr, status, error) {
                console.error("Error loading messages:", error);
            }
        });
    }

    // Call loadMessages initially to load messages on page load
    loadMessages();

    // Set interval to reload messages every 30 seconds (adjust as needed)
    setInterval(function() {
        loadMessages(); // Reload messages
    }, 3000); // 30 seconds interval (30000 milliseconds)

    function updateOffers(receiverId) {
    const rcv = receiverId;
    $.ajax({
        type: 'POST',
        url: '../php/fetch_offer.php',
        data: {
            received_id: rcv
        },
        success: function(response) {
            console.log('Retrieved:', response);
            
            // Parse the JSON response
            var responseData = JSON.parse(response);
            
            // Access response properties
            var bulletin_price = responseData.bulletin_price;
            var block_number = responseData.block_number;
            var lot_number = responseData.lot_number;
            var classification = responseData.classification;
            var formattedPrice = parseFloat(bulletin_price).toFixed(2);

            // Construct offer HTML
            var offer = `
                <h5 class="m-0">Price: ₱ ${formattedPrice}</h5>
                <p class="m-0">Block ${block_number} Lot ${lot_number} (${classification})</p>
            `;
            $('#offer_div').empty();
            // Append offer HTML to offer_div
            $('#offer_div').append(offer);
            
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
}


    // Function to handle click on message
    function handleMessageClick() {
        $(document).on('click', '.view_message', function() {
            var receiverId = $(this).data('receiver-id'); // Get the receiver_id from data attribute
            updateOffers(receiverId);
            var user_fname = $(this).data('user_fname'); 
            var user_lname = $(this).data('user_lname'); 
            var fullname =user_fname + ' ' + user_lname;

            $('#user').text(fullname);
            
            // Set the value of the element with id="received_id"
            $('#recieved_id').val(receiverId);
            console.log(receiverId)
            // Make an Ajax request to message_open.php
            $.ajax({
                url: '../php/message_open.php',
                method: 'GET',
                data: { receiverId: receiverId },
                dataType: 'json', // Expect JSON response
                success: function(response) {
                    console.log('Message opened successfully:', response);

                    // Clear existing messages
                    $('#message_open').empty();

                    // Check if response is a valid JSON array
                    if (Array.isArray(response) && response.length > 0) {
                        // Iterate over each message in the response array
                        response.forEach(function(message) {
                            // Determine if the message was sent by the current user
                            var isSentByCurrentUser = (message.reciever_id == receiverId);

                            // Determine message alignment based on sender
                            var messageAlignmentClass = isSentByCurrentUser ? 'text-end text-start bg-success text-light' : 'bg-light border text-secondary';

                            var align = isSentByCurrentUser ? 'd-flex justify-content-end' : 'd-flex justify-content-start';

                            // Construct message HTML
                            var messageHtml = `
                                <div class=" d-flex flex-row mb-3">
                                    <div class="w-100 ${align}">
                                        <div style="max-width: 50%" class="rounded-5 p-3 border rounded  ${messageAlignmentClass}">
                                        ${message.message_content}
                                        </div>
                                    </div>
                                </div>
                            `;

                            // Append message HTML to #message_open container
                            $('#message_open').append(messageHtml);
                        });
                    } else {
                        // Handle empty or invalid response
                        console.error('Invalid or empty response:', response);
                        // Optionally display an error message to the user
                    }
                },
                error: function(xhr, status, error) {
                    // Handle AJAX error
                    console.error('Error opening message:', error);
                    // Optionally display an error message to the user
                }
            });
        });
    }

    // Call the handleMessageClick function to set up click event handling
    handleMessageClick();
});

function send_message() {
        var recieved_id = $('#recieved_id').val();
        var sender_id = $('#sender_id').val();
        var message_content = $('#message_content').val().trim();
        $('#message_content').val('');

        // Validate message content
        if (message_content === '') {
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
            alertify.error('Exceed 200 Characters');
            return;
        }

        // Log retrieved values (optional)
        console.log("Recipient ID: " + recieved_id);
        console.log("Sender ID: " + <?php echo $id?>);
        console.log("Message Content: " + message_content);

        // AJAX request
        $.ajax({
            type: 'POST',
            url: '../php/send_chat.php',
            data: {
            recieved_id: recieved_id,
            sender_id: sender_id,
            message_content: message_content
            },
            success: function(response) {
            // Handle success response if needed
            console.log('Message sent successfully:', response);
            
            alertify.set('notifier','position', 'bottom-left');
            alertify.success('Message Sent!');
            // Close the modal after processing
            var modalElement = document.getElementById('message');
            var modalInstance = bootstrap.Modal.getInstance(modalElement);
            modalInstance.hide();
            handleMessageClick()

            var messageContentElement = document.getElementById('message_content');
                if (messageContentElement) {
                    messageContentElement.value = ''; // Assuming it's an input element
                    // If it's a different kind of element like a div, use innerHTML
                    // messageContentElement.innerHTML = '';
                }
            },
            error: function(xhr, status, error) {
            // Handle error
            console.error('Error sending message:', error);
            alertify.set('notifier','position', 'bottom-left');
            alertify.error('Message not sent');
            }
        });
        }

        // Update character count display on input change
        $('#message_content').on('input', function() {
        var messageLength = this.value.length;
        var maxCharacters = 200;
        var charactersLeft = maxCharacters - messageLength;
        $('#charCount').text("Characters left: " + charactersLeft);
        });
    
        // JavaScript to scroll the container down to its bottom
        document.addEventListener("DOMContentLoaded", function() {
            var messageContainer = document.getElementById("messageContainer");
            messageContainer.scrollTop = messageContainer.scrollHeight;
        });


</script>
</body>
</html>
