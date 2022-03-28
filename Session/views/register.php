<?php
session_start();
if (isset($_SESSION['reg_errors'])) {
    foreach ($_SESSION['reg_errors'] as $error) {
        echo "<p>$error</p>";
    }
    $_SESSION['reg_errors'] = [];
}

$first_name = $last_name = $email = "";

if(isset($_SESSION['first_name']) && isset($_SESSION['last_name']) && isset($_SESSION['email'])){
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <style>
        input {
            display: block;
            margin: 5px;;
        }
    </style>
</head>
<body>
    <h3>Please register</h3>
    <p><a href="login.php">I already have an account</a></p>
    <form action="../scripts/user_create.php" method="POST">
        <input type="text" placeholder="First Name" name="fname" value="<?php echo $first_name; ?>">
        <input type="text" placeholder="Last Name" name="lname" value="<?php echo $last_name; ?>">
        <input type="text" placeholder="Email" name="email" value="<?php echo $email; ?>">
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Confirm Password" name="confPassword">
        <input type="submit" value="Register">
    </form>
</body>
</html>
