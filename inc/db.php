<?php
ini_set('display_errors', 'On');
//Database
/*
*    define("DB_HOST", "YOUR HOST NAME");
*    define("DB_USER", "DataBase USER NAME");
*    define("DB_PASSWORD", "DataBase PASSWORD");
*    define("DB_NAME", "DataBase NAME");
*/

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "crypto");

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//Clear String Values
function Escape($string) {
    global $conn;
    return mysqli_real_escape_string($conn, $string);
}

//Query
function Query($query){
    global $conn;
    return mysqli_query($conn, $query);
}
