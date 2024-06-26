$(document).ready(function() {
    $('#username, #password').on('keyup', function(event) {
        if (event.key === 'Enter') {
            $('#login_btn').click();
        }
    });

    $("#login_form").submit(function(event) {
        event.preventDefault();
        var $username = $("#username").val();
        var $password = $("#password").val();

        $('.error').hide();
        $('#login_btn').hide();
        $('#loading').show();

        $.ajax({
            type: "POST",
            url: "php/login.php",
            data: {
                uname: $username,
                pass: $password
            },
            success: function(response) {
                $('#loading').hide();
                $('#login_btn').show();

                if (response === "1") {
                    window.location.href = '/admin/dashboard';
                } else if (response === "2") {
                    window.location.href = '/client';
                } else if (response === "3") {
                    window.location.href = '/visitor';
                } else if (response === "4") {
                    window.location.href = '/otp?email=' + encodeURIComponent($username);
                } else if (response === "6") {
                    window.location.href = '/client/homepage';
                }else if (response === "7") {
                    window.location.href = '/visitor/homepage';
                } else {
                    $('.error').show();
                }
            },
            error: function() {
                $('#loading').hide();
                $('#login_btn').show();
                $('.error').show();
            },
            timeout: 10000 // Adjust timeout (in milliseconds) as needed
        });
    });
});
