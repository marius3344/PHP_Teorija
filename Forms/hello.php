<?php
$usrNameErr = $emailErr = $webErr = $noteErr = $genderErr = "";
$userName = $email = $web = $note = $gender = "";



if ($_SERVER['REQUEST_METHOD']=="POST") {
    if (empty($_POST['userName'])) {
        $usrNameErr = "Username is required";
    } else {
        $userName = $_POST['userName'];
        
        if (!preg_match("/^[a-zA-Z-' ]*$/", $userName)){
            $usrNameErr = "Only letters and spaces allowed";
        }
    }
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else {
        $email = testInput($_POST['email']);
       
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Email format is not valid";
        }
    }
    if (empty($_POST['web'])) {
        $webErr = "Website is required";
    } else {
        $web = testInput($_POST['web']);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%?=~_|]/i", $web)){
            $webErr = "URL is invalid";
        }
    }
    if (empty($_POST['note'])) {
        $note = "";
    } else {
        $note = testInput($_POST['note']);
    }
    if (empty($_POST['gender'])) {
        $genderErr = "Gender is required";
    } else {
        $gender = testInput($_POST['gender']);
    }
}

function testInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <!-- <h1>Hello, <?php echo $_POST['userName'];?></h1> -->

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="userName">Username*</label>
    <br>
    <input type="text" name="userName"> 
    <span style="color:red"><?php echo $usrNameErr; ?></span>
    <br>
    <label for="email">Email*</label>
    <br>
    <input type="text" name="email">
    <span style="color:red"><?php echo $emailErr ?></span>
    <br>
    <label for="web">Website*</label>
    <br>
    <input type="text" name="web">
    <span style="color:red"><?php echo $webErr; ?></span>
    <br>
    <label for="note">Note</label>
    <br>
    <textarea name="note" cols="30" rows="10"></textarea>
    <span style="color:red"><?php echo $noteErr; ?></span>
    <br>
    <span>Gender*:</span>
    <br>
    <label for="gender">Male</label>
    <input type="radio" name="gender" value="male">
    <br>
    <label for="gender">Female</label>
    <input type="radio" name="gender" value="female">
    <br>
    <label for="gender">Undefined</label>
    <input type="radio" name="gender" value="undefined">
    <span style="color:red"><?php echo $genderErr; ?></span>
    <br>
    <input type="submit">
    <span> * fields are required</span>
    </form>


</body>
</html>