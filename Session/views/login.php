<?php 
session_start();
if(isset($_SESSION['auth_errors'])){
    $errors = $_SESSION['auth_errors'];
    $_SESSION['auth_errors'] = [];
    foreach($errors as $error){
        echo "<p>$error</p>";
    }
}

$locked = false;

if(isset($_SESSION['login_count'])){
    if($_SESSION['login_count']===3){
        $locked=true;
    }
} else {
    $_SESSION['login_count'] = 0;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
<h3>Please login</h3>
    <p><a href="register.php">Do not have an account? Please  register</a></p>
    <form action="../scripts/user_auth.php" method="POST">
        <input type="text" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <input type="submit" value="log in" <?php if($locked){echo "disabled";} ?>>
    </form>
</body>
</html>