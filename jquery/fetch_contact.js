$(document).ready(function(){
    // Function to fetch data from the PHP API
    function fetchData() {
        $.ajax({
            url: '../php/get_cementery_info.php', // URL of your PHP API
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Update the input fields with the fetched data
                $('#c_name').val(data.c_name);
                $('#address').val(data.address);
                $('#municipal').val(data.municipal);
                $('#province').val(data.province);
                $('#barangay').val(data.barangay);
                $('#contact').val(data.contact);
                $('#email').val(data.email);
                $('#link').val(data.link);
                
                // Log the response to the console
                // console.log(data);
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);
            }
        });
    }

    // Call fetchData function when the page loads
    fetchData();
});