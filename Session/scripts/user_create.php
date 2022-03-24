<?php
session_start();
require_once("../database/db_connect.php");
$_SESSION['reg_errors'] = [];

if (!$_POST) {
    header("Location: ../views/register.php");
}

if(!(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['confPassword']))){
    echo "Something went wrong, please contact system admin";
}

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$conf_password = $_POST['confPassword'];

if (($first_name=="" || $last_name=="" || $email=="" || $password=="" || $conf_password=="")) {
    array_push($_SESSION['reg_errors'], "Please fill all fields!");
    
} 

if(strlen($first_name)>50){
    array_push($_SESSION['reg_errors'], "First Name is too long. MAX 50 symbols");
}

if(strlen($last_name)>50){
    array_push($_SESSION['reg_errors'], "Last Name is too long. MAX 50 symbols");
}

if(strlen($email)>50){
    array_push($_SESSION['reg_errors'], "Email is too long. MAX 50 symbols");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($_SESSION['reg_errors'], "Email format is invalid");
}

if(!empty($_SESSION['reg_errors'])){
    header("Location: ../views/register.php");
}

?>