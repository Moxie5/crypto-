$(document).ready(function() {
    $("#sign_in").click(function(e){
        e.preventDefault();
        const username = $('#username').val();
        const password = $('#password').val();
        //validate
        if(username.trim() == '' ){
            $('.statusMsg').fadeIn(1000).html('Please enter your Email.');
            clear_alert();
            $('#username').focus();
            return false;
        }else if(password.trim() == '') {
            $('.statusMsg').fadeIn(1000).html('Please enter your password.');
            clear_alert();
            $('#password').focus();
            return false;
        }else {
            const data = {username: username, password: password};
            // make ajax call
            $.ajax({
                type: "POST",
                url: "inc/login.php",
                data: data,
                dataType: 'json',
                success: function(data) {
                    if (data.response == 1) {
                        // console.log(window.location.href = data.redirecturl);
                        window.location.href = data.redirecturl;
                    }
                    else {
                        window.location.href = data.redirecturl;
                    }
                }
            });
        }
    });
    function clear_alert() {
        setTimeout(function() { 
            $('.statusMsg').fadeOut(1000);
        }, 5000);
    }
});