<?php
require_once('config.php');

if (isset($_POST)) {
    $user_name = Escape($_POST['username']);
    $email = Escape($_POST['email']);
    $phone = Escape($_POST['phone']);
    $subject = Escape($_POST['subject']);
    $message = Escape($_POST['message']);

    AddInquiries($user_name,$email,$phone,$message,$subject);
}

function AddInquiries($user_name,$email,$phone,$message,$subject) {
    $sql = "INSERT INTO user_questions (`full_name`, `subject`, `user_email`, `user_phone`, `message`) VALUES ('$user_name', '$subject', '$email', '$phone', '$message')";
    $result = Query($sql);

    if (!$result) {
        $msg['status'] = 'failed';
    }else {
        $msg['status'] = 'success';
    }

    echo json_encode($msg);
}