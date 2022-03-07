<?php
require_once("../db_connection.php");

//susirenkame login info is formos

if($_POST){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

//isstraukiame userius is duomenu bazes
try {
    $sql ="SELECT * FROM users WHERE email='$email'";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetch();
} catch (PDOException $e){
    echo "Select failed: ". $e->getMessage();
}
//pasitikriname ar yra toks email
if ($result){
    $dbPasswordHash = $result['password'];
    //tikriname slaptazodi
    if(password_verify($password, $dbPasswordHash)){
        echo "Login successful";
    } else {
        echo "Password is incorrect";
    }
} else {
    echo "Email does not exist";
}

?>