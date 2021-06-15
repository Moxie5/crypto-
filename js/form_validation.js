$(document).ready(function() {
    const reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    //Registration
    $("#sign_up").click(function(e){
        e.preventDefault();
        const name = $('#inputName').val();
        const phone = $('#inputPhone').val();
        const email = $('#inputEmail').val();
        const country = $('#country').val();
        const password = $('#inputPasswordReg').val();
        
        //validate
        if(name.trim() == '' ){
            $('.statusMsg').fadeIn(1000).html('Please enter your name.');
            clear_alert();
            $('#inputName').focus();
            return false;
        }else if(email.trim() == '' ){
            $('.statusMsg').fadeIn(1000).html('Please enter your Email.');
            clear_alert();
            $('#inputEmail').focus();
            return false;
        }else if(email.trim() != '' && !reg.test(email)){
            $('.statusMsg').fadeIn(1000).html('Please enter valid Email.');
            clear_alert();
            $('#inputEmail').focus();
            return false;
        }else if(phone.trim() == '' ){
            $('.statusMsg').fadeIn(1000).html('Please enter your phone.');
            clear_alert();
            $('#inputPhone').focus();
            return false;
        }else if(password.trim() == '') {
            $('.statusMsg').fadeIn(1000).html('Please enter your password.');
            clear_alert();
            $('#inputPasswordReg').focus();
            return false;
        }else if($('#gridCheck').prop("checked") == false) {
            $('.statusMsg').fadeIn(1000).html('You did not accept the Terms.');
            clear_alert();
            $('#gridCheck').focus();
            return false;
        }else {
            const data = $("#register_form").serialize();
            // make ajax call
            $.ajax({
                type: "POST",
                url: "crypto/../inc/register.php",
                data: data,
                dataType: 'json',
                success: function(data){
                    if (data.status == 'success') {
                        $(".statusMsgsuccess").fadeIn(1000).html(data.message);
                        clear_alert();
                    }else {
                        $(".statusMsg").fadeIn(1000).html(data.message);
                        clear_alert();
                    }
                    $('#register_form')[0].reset();
                }
            });
        }
    });

    //LOGIN
    $("#sign_in").click(function(e){
        e.preventDefault();
        const email = $('#inputEmailLog').val();
        const password = $('#inputPasswordLog').val();
        //validate
        if(email.trim() == '' ){
            $('.statusMsg').fadeIn(1000).html('Please enter your Email.');
            clear_alert();
            $('#inputEmail').focus();
            return false;
        }else if(email.trim() != '' && !reg.test(email)){
            $('.statusMsg').fadeIn(1000).html('Please enter valid Email.');
            clear_alert();
            $('#inputEmailLog').focus();
            return false;
        }else if(password.trim() == '') {
            $('.statusMsg').fadeIn(1000).html('Please enter your password.');
            clear_alert();
            $('#inputPasswordLog').focus();
            return false;
        }else {
            const data = {email: email, password: password};
            // make ajax call
            $.ajax({
                type: "POST",
                url: "crypto-1/../inc/login.php",
                data: data,
                dataType: 'json',
                success: function(data) {
                    if (data.response == 1) {
                        $(".statusMsgsuccess").html(data.msg);
                        window.location.href = data.redirecturl;
                    }else {
                        $(".statusMsg").fadeIn(1000).html(data.msg);
                        clear_alert();
                    }
                }
            });
        }
    });

    //Contact form
    $("#inquiries").click(function(e){
        e.preventDefault();
        let username = $('#username').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let message = $('#message').val();
        let subject = $('#subject').val();
        //validate
        if(username.trim() == '') {
            $('#status').fadeIn(1000).html('Please enter your Full name.');
            clear_alert();
            $('#username').focus();
            return false;
        }else if(email.trim() != '' && !reg.test(email)){
            $('#status').fadeIn(1000).html('Please enter valid Email.');
            clear_alert();
            $('#email').focus();
            return false;
        }else if(email.trim() == '' ){
            $('#status').fadeIn(1000).html('Please enter your Email.');
            clear_alert();
            $('#email').focus();
            return false;
        }else if(subject.trim() == '') {
            $('#status').fadeIn(1000).html('Please enter subject message.');
            clear_alert();
            $('#subject').focus();
        }else if(message.trim() == '') {
            $('#status').fadeIn(1000).html('Please enter message.');
            clear_alert();
            $('#message').focus();
        }else{
            const data = {username:username, email: email, phone: phone, message:message, subject: subject};
            // make ajax call
            $.ajax({
                type: "POST",
                url: "crypto/../inc/contact_form.php",
                data: data,
                dataType: 'json',
                success: function(data) {
                    if (data.status == 'success') {
                        $('#status_success').fadeIn(1000).html('Thank you for the inquiry.');
                        clear_alert();
                        $('#contact_form')[0].reset();
                    }else {
                        $('#status').fadeIn(1000).html('Your inquiry can not be send.');
                        clear_alert();
                    }
                }
            });
        }
    });

    //Update profile
    $("#save_changes").click(function(e){
        e.preventDefault();
        let username = $('#username').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let country = $('#country').val();
        let update_profile = 'update_profile';
        //validate

        if (username.trim() == '') {
            $('#status').html('<div class="alert alert-danger" role="alert">Full name can not be empty.</div>');
            $('#username').focus();
        }else if(email.trim() == '') {
            $('#status').html('<div class="alert alert-danger" role="alert">Email can not be empty.</div>');
            $('#email').focus();
        }else {
            const data = {update_profile:update_profile, username:username, email:email, phone:phone, country:country};
            // make ajax call
            $.ajax({
                type: "POST",
                url: "crypto-1/../../inc/update_profile.php",
                data: data,
                dataType: 'json',
                success: function(data) {
                    if (data.status == 'success') {
                        $('#status').html('<div class="alert alert-success" role="alert">Profile was updated.</div>');
                    }else {
                        $('#status').html('<div class="alert alert-danger" role="alert">Error</div>');
                    }
                }
            });
        }
        
    });

     //Update profile password
     $("#change_password").click(function(e){
        e.preventDefault();
        let old_password = $('#old_password').val();
        let new_password = $('#new_password').val();
        let pwd_change = 'pwd_change';
        //validate
        
        if (old_password == '') {
            $('#status').html('<div class="alert alert-danger" role="alert">Please enter your old password.</div>');
            $('#old_password').focus();
        }else if(new_password == '') {
            $('#status').html('<div class="alert alert-danger" role="alert">Please enter your new password.</div>');
            $('#new_password').focus();
        }else {
            const data = {pwd_change:pwd_change, new_password:new_password, old_password:old_password};
            // make ajax call
            $.ajax({
                type: "POST",
                url: "crypto-1/../../inc/update_profile.php",
                data: data,
                dataType: 'json',
                success: function(data) {
                    if (data.status == 'success') {
                        $('#status').html('<div class="alert alert-success" role="alert">Your password was changed.</div>');
                    }else {
                        $('#status').html('<div class="alert alert-danger" role="alert">'+data.msg+'</div>');
                    }
                }
            });
        }
    });
    function clear_alert() {
        setTimeout(function() { 
            $('.statusMsg').fadeOut(1000); 
            $('#status').fadeOut(1000); 
            $('#status_success').fadeOut(1000); 
            $('.statusMsgsuccess').fadeOut(1000); 
        }, 5000);
    }
});