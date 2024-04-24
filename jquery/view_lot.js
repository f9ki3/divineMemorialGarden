function enableInputFields() {
    document.getElementById('ownerName').disabled = false;
    document.getElementById('lotStatus').disabled = false;
    document.getElementById('classification').disabled = false;
}

function showEditLotDiv() {
    document.getElementById('edit_lot_div').style.display = 'flex';
}

function disableInputFields() {
    document.getElementById('ownerName').disabled = true;
    document.getElementById('lotStatus').disabled = true;
    document.getElementById('classification').disabled = true;
}

function hideEditLotDiv() {
    document.getElementById('edit_lot_div').style.display = 'none';
}

function submitLot() {
    // Disable input fields and hide the edit_lot_div
    disableInputFields();
    hideEditLotDiv();

    // Retrieve values of input fields
    var id = <?php echo json_encode($id); ?>;
    var ownerNameValue = document.getElementById('ownerName').value;
    var lotStatusValue = document.getElementById('lotStatus').value;
    var classificationValue = document.getElementById('classification').value;

    // Prepare data object to send via AJAX
    var data = {
        id: id,
        ownerName: ownerNameValue,
        lotStatus: lotStatusValue,
        classification: classificationValue
    };

    // Make AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'edit_lot.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Request was successful
                console.log(xhr.responseText);
                // Optionally, process response from edit_lot.php
            } else {
                // Request failed
                console.error('AJAX request failed');
            }
        }
    };
    
    // Convert data object to JSON before sending
    xhr.send(JSON.stringify(data));
}

function cancelEdit() {
    // Disable input fields and hide the edit_lot_div
    disableInputFields();
    hideEditLotDiv();
}
