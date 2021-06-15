<?php
    session_start();
    require_once('db.php');

function get_all_users() {
    global $conn;
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    $arr = array();

    while($row = mysqli_fetch_assoc($result)){
        $arr[] = $row;
    }

    return $arr;
}

function get_all_inquiries() {
    global $conn;
    $sql = "SELECT * FROM user_questions";
    $result = mysqli_query($conn, $sql);

    $arr = array();

    while($row = mysqli_fetch_assoc($result)){
        $arr = $row;
    }

    return $arr;
}

function get_logged_user() {
    global $conn;
    $user = $_SESSION['auser_id'];
    $sql = "SELECT * FROM admin WHERE auser_id='$user'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    return $row['user_name'];
    
}

function login_auth_admin($user_name, $password) {
    global $conn;
    $sql = "SELECT * FROM admin WHERE user_name='$user_name'";
    $results = mysqli_query($conn, $sql);

    if (mysqli_num_rows($results) > 0 ) {
        $row = mysqli_fetch_assoc($results);
        if (password_verify($password, $row['user_password'])) {
            $_SESSION['auser_id'] = $row['auser_id'];
            return  true;
        }
    }else {
        return false;
    }
}