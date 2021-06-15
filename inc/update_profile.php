<?php
include_once('../inc/config.php');
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){
    update_user($_POST);
}
function update_user($data) {
    global $user_id;
    $user_name = Escape($_POST['username']);
    $email = Escape($_POST['email']);
    $phone = Escape($_POST['phone']);
    $country = Escape($_POST['country']);
    $sql = "UPDATE users SET user_name='$user_name', user_phone='$phone', user_email='$email', user_country='$country' WHERE user_id='$user_id'";
    $result = Query($sql);

    if ($result) {
        $msg['status'] = 'success';
    }else {
        $msg['status'] = 'failed';
    }
    echo json_encode($msg);
}
if (isset($_POST['pwd_change'])) {
    change_password($_POST);
}

function change_password($data) {
    global $user_id;
    $old_password = Escape($_POST['old_password']);
    $new_password = Escape($_POST['new_password']);

    if (!password_verify($old_password, get_user_pwd_by_id($user_id)['user_password'])) {
        $msg['msg'] = 'Inccorect old password';
    }else {
        $hash_password = password_hash($new_password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET user_password='$hash_password' WHERE user_id='$user_id'";
        $result = Query($sql);
        if ($result) {
            $msg['status'] = 'success';
        }else {
            $msg['msg'] = 'Something went wrong!';
        }
    }

    echo json_encode($msg);
}

function get_user_pwd_by_id($user_id) {
    $sql = "SELECT user_password FROM users WHERE user_id='$user_id'";
    $result = Query($sql);

    if ($result) {
        return fetch_data($result);
    }else {
        return false;
    }
}