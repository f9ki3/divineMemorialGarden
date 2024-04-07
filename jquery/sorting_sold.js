$(document).ready(function() {
    $.ajax({
        url: '../php/sorting_sold.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $.each(data, function(index, item) {
                var divSelector = 'div[data-id="' + item.id + '"]'; // Assuming using data-id attribute
                var color = (item.status == 0) ? 'green' : 'red';
                $(divSelector).css('background-color', color);
            });
        }
    });
});
