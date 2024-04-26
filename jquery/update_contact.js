function save_contact() {
    $(document).ready(function() {
        var c_name = $('#c_name').val();
        var address = $('#address').val();
        var municipal = $('#municipal').val();
        var province = $('#province').val();
        var barangay = $('#barangay').val();
        var contact = $('#contact').val();
        var link = $('#link').val();
        var email = $('#email').val();
        var telephone = $('#telephone').val(); // Corrected from $('#link').val()
        
        console.log("Company Name:", c_name);
        console.log("Address:", address);
        console.log("Municipal:", municipal);
        console.log("Province:", province);
        console.log("Barangay:", barangay);
        console.log("Contact:", contact);
        console.log("Link:", link);
        console.log("Email:", email);
        
        // Send data to add_contact_info.php using AJAX
        $.ajax({
            type: "POST",
            url: "../php/update_contact_info.php",
            data: {
                c_name: c_name,
                address: address,
                municipal: municipal,
                province: province,
                barangay: barangay,
                contact: contact,
                link: link,
                email: email
            },
            success: function(response) {
                // Handle success response here
                $('#c_name').prop('disabled', true);
                $('#address').prop('disabled', true);
                $('#municipal').prop('disabled', true);
                $('#province').prop('disabled', true);
                $('#barangay').prop('disabled', true);
                $('#contact').prop('disabled', true);
                $('#link').prop('disabled', true);
                $('#email').prop('disabled', true);
                $('#telephone').prop('disabled', true);
                $('#edit_contact').hide()
                console.log(response);
                alertify.set('notifier','position', 'bottom-left'); // Set position of notifications
                alertify.success('Updated Success'); // Display success notification
            },
            error: function(xhr, status, error) {
                // Handle error here
                alertify.set('notifier','position', 'bottom-left'); // Set position of notifications
                alertify.success('Please Required Values'); // Display success notification
            }
        });
    });
}
