$(document).ready(function() {
    $.ajax({
        url: '../php/sorting_sold.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $.each(data, function(index, item) {
                if (item.status == 0) {
                    $('div[value="' + item.id + '"]').css('background-color', 'green');
                } else {
                    $('div[value="' + item.id + '"]').css('background-color', 'red');
                }
            });
        }
    });
});