<html lang="en">
<?php include 'header.php'; ?>
<body>
<div>
<?php include 'navbar.php'; ?>

<div class="container mt-3">
    <div>
        <a href="burial" class="btn border-success text-success btn-sm">Sale Bulletin</a>
        <a href="#" class="btn border-success text-success btn-sm">Burial Services</a>
        <a href="transfer_ownership" class="btn btn-success btn-sm">Transfer Ownership</a>
    </div>
<div>

<div class="mt-3">
<table id="bulletinTable" class="display " style="width:100%">
    <thead>
        <tr>
            <th style="width: 5%">ID</th>
            <th style="width: 15%">Date</th>
            <th style="width: 10%">Owner Name</th>
            <th style="width: 15%">Classification</th>
            <th style="width: 10%">Location</th>
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
            "url": "../php/fetch_transaction.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "id" },
            { "data": "date" },
            { "data": "owner_name" },
            { "data": "classification" },
            { "data": "location" },
            {
                "data": null,
                "render": function(data, type, row) {
                    return '<div class="action-buttons">' +
                           '<button class="btn-accept btn btn-success btn-sm me-2" data-userid="' + row.id + '">Transfer</button>' +
                           '<button class="btn-delete btn btn-danger btn-sm" data-userid="' + row.id + '">Cancel</button>' +
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
 