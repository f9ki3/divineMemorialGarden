<html lang="en">
<?php include 'header.php'; ?>
<body>
<div>
<?php include 'navbar.php'; ?>

<div class="container mt-3">
    <div>
        <button class="btn btn-success btn-sm">Sale Bulletin</button>
        <button class="btn border-success text-success btn-sm">Burial Services</button>
        <button class="btn border-success text-success btn-sm">Transfer Ownership</button>
        <button class="btn border-success text-success btn-sm">Transaction Record</button>
    </div>
<div>

<div class="mt-3">
<table id="bulletinTable" class="display " style="width:100%">
    <thead>
        <tr>
            <th style="width: 5%">ID</th>
            <th style="width: 15%">Date</th>
            <th style="width: 10%">Price</th>
            <th style="width: 15%">Contact</th>
            <th style="width: 10%">Email</th>
            <th style="width: 20%">Note</th>
            <th style="width: 15%">Action</th>
        </tr>
    </thead>
</table>
</div>
</div>

</div>
    
            

<?php include 'footer.php'; ?>
<script>
$(document).ready(function() {
    var table = $('#bulletinTable').DataTable({
        "ajax": {
            "url": "../php/fetch_bulletin_data.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "id" },
            { "data": "bulletin_date" },
            { "data": "bulletin_price" },
            { "data": "bulletin_contact" },
            { "data": "bulletin_email" },
            { "data": "bulletin_note" },
            {
                "data": null,
                "render": function(data, type, row) {
                    return '<div class="action-buttons">' +
                           '<button class="btn-accept btn btn-success btn-sm me-2" data-userid="' + row.bulletin_user_id + '">Accept</button>' +
                           '<button class="btn-delete btn btn-danger btn-sm" data-userid="' + row.bulletin_user_id + '">Cancel</button>' +
                           '</div>';
                }
            }
        ]
    });

    // Handle accept button click
    $('#bulletinTable tbody').on('click', '.btn-accept', function () {
        var userId = $(this).data('userid');
        // Confirm acceptance
        if (confirm('Are you sure you want to accept user ID: ' + userId + '?')) {
            // Make AJAX request to update status
            $.ajax({
                url: '../php/update_status.php', // URL to your server-side script
                method: 'POST',
                data: { userId: userId, action: 'accept' }, // Data to send
                success: function(response) {
                    // Handle success response
                    alert('User ID ' + userId + ' has been accepted.');
                    // You can optionally reload or update the DataTable after success
                    $('#bulletinTable').DataTable().ajax.reload();
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error('Error accepting user ID ' + userId + ': ' + error);
                    alert('Error accepting user ID ' + userId + '. Please try again.');
                }
            });
        }
    });


    // Handle delete button click
    $('#bulletinTable tbody').on('click', '.btn-delete', function () {
        var userId = $(this).data('userid');
        alert('Delete user ID: ' + userId);
        // Perform delete action here, e.g., prompt confirmation and then delete
    });
});
</script>

</div>
</body>
</html>
 