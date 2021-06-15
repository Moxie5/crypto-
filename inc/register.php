<?php
ini_set('display_errors', 'On');
require_once("config.php");
if(isset($_POST)) {
    $user_name = Escape($_POST['user_name']);
    $user_phone = Escape($_POST['user_phone']);
    $user_email = Escape($_POST['user_email']);
    $password_reg = Escape($_POST['password_reg']);
    $country = Escape($_POST['country']);

    if(Email_Exists($user_email)) {
        $msg['status'] = 'failed';
        $msg['message'] = 'Email already Exists.';
        echo json_encode($msg);
    }else {
        $hash_password = password_hash($password_reg, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (`user_name`, `user_phone`, `user_email`, `user_country`, `user_password`) 
        VALUES ('$user_name', '$user_phone', '$user_email', '$country', '$hash_password')";
        $result = Query($sql);
        $msg['status'] = 'success';
        $msg['message'] = 'You have been Registred';
        echo json_encode($msg);
    }
}else {
    echo "Error";
}