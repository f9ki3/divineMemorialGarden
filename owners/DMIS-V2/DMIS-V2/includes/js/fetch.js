function fetchData(url, objData) {
    var results = null;
    if (objData === 'undefined' || objData === null) objData = null;
    $.ajax({
        url: url,
        async: false,
        type: "POST",
        dataType: "JSON",
        data: objData,
        success: function(response) {
            results = response;
        }
    });
    return results;
}

function insertData(url, objData) {
    var results = null;
    $.ajax({
        url: url,
        async: false,
        type: "POST",
        dataType: "JSON",
        data: objData,
        success: function(response) {
            results = response;
        }
    });
    return results;
}

function deleteData(url, objData) {
    return insertData(url, objData);
}

function updateData(url, objData) {
    return insertData(url, objData);
}

function uploadData(url, formData) {
    var results = null;
    if (formData === 'undefined' || formData === null) formData = null;
    $.ajax({
        url: url,
        async: false,
        type: "POST",
        contentType: false, // Not to set any content header
        processData: false,
        data: formData,
        success: function(response) {
            results = response;
        }
    });
    return results;
}