<?php 
ini_set('display_errors', 'On');
function clean ($string) {
    return htmlentities($string);
}

function set_message($msg) {
    if(!$msg) {
        $_SESSION['message']=$msg;
    } else {
        $msg = '';
    }
}

function display_message() {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

function Email_Exists($email){
    $sql = "SELECT * FROM users WHERE user_email='$email'";
    $result = Query($sql);

    if(fetch_data($result)){
        return true;
    }
    else {
        return false;
    }
}

function login_auth($email, $password) {
    // password_verify($password, $row['account_passwd']
    $sql = "SELECT * FROM users WHERE user_email='$email'";
    $results = Query($sql);

    if (row_count($results) > 0 ) {
        $row = fetch_data($results);
        if (password_verify($password, $row['user_password'])) {
            $_SESSION['user_id'] = $row['user_id'];
            return true;
        }
    }else {
        return false;
    }
}
function get_user($user_id){
    $sql = "SELECT * FROM users WHERE user_id='$user_id'";
    $results = Query($sql);

    if (row_count($results) > 0 ) {
        $row = fetch_data($results);
    }
    return $row;
}

// Fetch
function fetch_data($result) {
    return mysqli_fetch_assoc($result);
}
// Num Row
function row_count($count) {
    return mysqli_num_rows($count);
}