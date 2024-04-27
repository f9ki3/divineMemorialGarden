function proceed() {
    var accountName = $('#account_name').val();
    var graveStatus = $('#grave_status').val();
    var blockLot = $('#block_lot').val();
    var lotStatus = $('#lot_status').val();
    var deceaseName = $('#decease_name').val();
    var tierType = $('#tier_type').val();
    var dob = $('#dob').val();
    var dod = $('#dod').val();
    var dateService = $('#date_service').val();
    var paymentMethod = $('#payment_method').val();
    var proofOfPayment = $('#proof_of_payment')[0].files[0]; // Get the file object
    var serviceStatus = 0;

    // console.log("Account Name:", accountName);
    // console.log("Grave Status:", graveStatus);
    // console.log("Block Lot:", blockLot);
    // console.log("Lot Status:", lotStatus);
    // console.log("Decease Name:", deceaseName);
    // console.log("Tier Type:", tierType);
    // console.log("Date of Birth:", dob);
    // console.log("Date of Death:", dod);
    // console.log("Date of Service:", dateService);
    // console.log("Payment Method:", paymentMethod);
    // console.log("Proof of Payment:", proofOfPayment.name); // Display file name
    // console.log("Service Status:", serviceStatus);

    // Create FormData object
    var formData = new FormData();
    formData.append('account_name', accountName);
    formData.append('grave_status', graveStatus);
    formData.append('block_lot', blockLot);
    formData.append('lot_status', lotStatus);
    formData.append('decease_name', deceaseName);
    formData.append('tier_type', tierType);
    formData.append('dob', dob);
    formData.append('dod', dod);
    formData.append('date_service', dateService);
    formData.append('payment_method', paymentMethod);
    formData.append('proof_of_payment', proofOfPayment);
    formData.append('service_status', serviceStatus);

    // AJAX request
    $.ajax({
        url: '../php/payment.php',
        type: 'POST',
        data: formData,
        contentType: false, // Don't set content type
        processData: false, // Don't process data
        success: function(response) {
            console.log(response)
            alertify.set('notifier','position', 'bottom-left');
            alertify.success('Transaction Complete');
        },
        error: function(xhr, status, error) {
            // Handle error
        }
    });
}
