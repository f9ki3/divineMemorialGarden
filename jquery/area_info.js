
$(document).ready(function(){
    $("#btnAdd").click(function(){
        // Fetching input field values
        var date = $("#date").val();
        var classification = $("#classification").val();
        var block_number = $("#block_number").val();
        var lot_number = $("#lot_number").val();
        var owner_name = $("#owner_name").val();

        // Sending data using AJAX
        $.ajax({
            url: "../php/add_owner.php",
            type: "POST",
            data: {
                date: date,
                classification: classification,
                block_number: block_number,
                lot_number: lot_number,
                owner_name: owner_name
            },
            success: function(response){
                // Handle success response
                console.log(response);
                // Close the modal if success
                $("#addOwner").modal('hide');
                // Reload the data list
                reloadList();
                // You can add further actions here, such as showing a success message or redirecting the user
            },
            error: function(xhr, status, error){
                // Handle error response
                console.error(xhr.responseText);
            }
        });
    });

    // Function to reload the data list
    function reloadList() {
        $.ajax({
            url: "reload_data_list.php", // Change the URL to the appropriate PHP file
            type: "GET",
            success: function(response){
                // Replace the current data list with the updated one
                $("#dataList").html(response);
            },
            error: function(xhr, status, error){
                // Handle error response
                console.error(xhr.responseText);
            }
        });
    }
});

$(document).ready(function() {
        // Fetching data from PHP script using AJAX
        $.ajax({
            url: '../php/area_property_tables.php',
            dataType: 'json',
            success: function(data) {
                // Initializing DataTable
                $('#property_table').DataTable({
                    data: data,
                    columns: [
                        { data: 'area' },
                        { data: 'block_number' },
                        { data: 'lot_number' },
                        { data: 'classification' },
                        { data: 'lot_owner' }
                    ]
                });
            }
        });
    });