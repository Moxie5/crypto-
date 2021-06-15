<?php 
require_once("config.php");

if(isset($_POST)) {
    $user_email = Escape($_POST['email']);
    $password_log = Escape($_POST['password']);
    
    if(!Email_Exists($user_email)) {
        $message['msg'] = '<div class="alert alert-danger" role="alert"> Account with'.$user_email.' doesn\'t exists</div>';
        echo json_encode($message);
    }else {
        if (!login_auth($user_email, $password_log)) {
            $message['msg'] = '<div class="alert alert-danger" role="alert">Inccorect password</div>';
            echo json_encode($message);
        }else {
            $message['response'] = 1;
            $message['redirecturl'] = 'profiles/profile.php';
            $message['msg'] = '<div class="alert alert-success" role="alert">LOGED IN</div>';
            echo json_encode($message);
        }
    }
}else {
    $message['msg'] ='<div class="alert alert-danger" role="alert">Something went wrong</div>';
    echo json_encode($message);
}