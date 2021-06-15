<?php
    include_once('functions.php');

if (isset($_POST)) {
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    
    if(login_auth_admin($user_name, $password)){
            $message['response'] = 1;
            $message['redirecturl'] = 'inc/dashboard.php';
            echo json_encode($message);
    }else {
        $message['redirecturl'] = '/crypto-1/admin';
        echo json_encode($message);
    }
}