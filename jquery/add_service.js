function add() {
    $(document).ready(function() {
        var service_title = $('#service_title').val();
        var service_fee = $('#service_fee').val();
        var service_description = $('#service_description').val();
        var service_cover = $('#service_cover').prop('files')[0]; // Get the file object

        // Validate input fields
        if (service_title.trim() === '' || service_fee.trim() === '' || service_description.trim() === '' || !service_cover) {
            // If any required field is empty, display error message
            alertify.set('notifier', 'position', 'bottom-left'); // Set position of notifications
            alertify.error('All fields are required'); // Display error notification
            return; // Exit function to prevent AJAX call
        }

        // Validate service_fee to ensure it contains only numbers
        var regex = /^\d+$/;
        if (!regex.test(service_fee)) {
            alertify.set('notifier', 'position', 'bottom-left');
            alertify.error('Service fee must be a number');
            return;
        }

        // Create FormData object to send both data and file
        var formData = new FormData();
        formData.append('service_title', service_title);
        formData.append('service_fee', service_fee);
        formData.append('service_description', service_description);
        formData.append('service_cover', service_cover);

        // Send data to add_service.php using AJAX
        $.ajax({
            type: "POST",
            url: "../php/add_service.php",
            data: formData,
            contentType: false, // Don't set contentType
            processData: false, // Don't process the data
            success: function(response) {
                // Handle success response here
                alertify.set('notifier', 'position', 'bottom-left'); // Set position of notifications
                alertify.success('Added Successfully'); // Display success notification
                function forceClickButton() {
                    var closeButton = document.querySelector('#close');
                    if (closeButton) {
                        closeButton.click();
                    }
                }

                forceClickButton()
                
                $('#service_title').val('');
                $('#service_fee').val('');
                $('#service_description').val('');
                $('#service_cover').val(''); 
                               
            },
            error: function(xhr, status, error) {
                // Handle error here
                alertify.set('notifier', 'position', 'bottom-left'); // Set position of notifications
                alertify.error('Error: ' + error); // Display error notification
            }
        });
    });
}
