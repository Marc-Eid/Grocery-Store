<?php
$dbhost = 'remotemysql.com:3306';
$dbuser = 'HTADFpjYkD';
$dbpass = 'wfJDJmJgdL';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbuser);
   
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['email']) || (trim($_SESSION['email']) == '')) {
    if ($password == "admin" && $email == "admin"){
        header('location:backstore.php');
    } else {
        header('location:contact.html');
    }
    exit();
}
$session_id=$_SESSION['email'];



?>