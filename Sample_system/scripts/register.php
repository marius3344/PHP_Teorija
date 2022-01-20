<?php 

$username = $email = $password = $confirmPassword = "";
if ($_POST){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
} else {
    header("Location: ../index.php");
    exit;
}

//echo $username.$email.$password.$confirmPassword;

if($password == $confirmPassword){
    $password = password_hash($password, PASSWORD_DEFAULT);
    //echo $password;
} else {
    header("Location: ../../sample_system/?username=".$username."&email=".$email."&error=Passwords+do+not+match");
    //header("Location: ../sample_system/?error=Passwords+do+not+match");
    exit;
}

header("Location: ../../sample_system/views/welcome.php?username=".$username);

?>