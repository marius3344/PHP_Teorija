<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
require_once '../db_connection.php';

$user = $_SESSION['userId'];
if($_POST){
    try {
        $userid = $_POST['userid'];
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];

        $sql = "UPDATE users SET first_name = '$firstName', last_name = '$lastName', email = '$email' WHERE id='$userid'";
        $query = $conn->prepare($sql);
        $result = $query->execute();
        if($result){
            header("Location: ../views/users.php");
        }

    } catch(PDOException $e) {
        echo "Update failed: ". $e->getMessage();
    }
} else {
    header("Location: ../");
}


?>
