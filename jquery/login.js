$(document).ready(function(){
    $('#username, #password').on('keyup', function(event) {
        if (event.key === 'Enter') {
            $('#login_btn').click();
            
        }
    });

    $("#login_form").submit(function(event){
        event.preventDefault();
        var $username = $("#username").val();
        var $password = $("#password").val();

        $('.error').hide();
        $('#login_btn').hide();

        $.ajax({
            type: "POST",
            url: "php/login.php",
            data: {
                uname: $username,
                pass: $password
            },
            success: function(response){
                if(response === "1") {
                    $('#loading').show();
                    setTimeout(function() {
                        $('#loading').hide();
                        $('#login_btn').show();
                        window.location.href = '/divineMemorialGarden/admin/dashboard';
                    }, 3000);
                }else if(response === "2") {
                    $('#loading').show();
                    setTimeout(function() {
                        $('#loading').hide();
                        $('#login_btn').show();
                        window.location.href = '/divineMemorialGarden/client/';
                    }, 3000);
                } else {
                    $('#loading').show();
                    setTimeout(function() {
                        $('#loading').hide();
                        $('.error').show();
                        $('#login_btn').show();
                    }, 3000); // Show loading for 3 seconds before hiding
                }
            }
        });
    });
});