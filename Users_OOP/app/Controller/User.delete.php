<?php 

$id = isset($_GET['id']) ? $_GET['id'] : die("ERROR: no User ID");

require "../../config/Database.php";
require "User.php";

$database = new Database;
$db = $database->getConnection();

$user = new User($db);
$user->id = $id;

if ($user->delete()){
    header ("Location: ../../../");
} else {
    echo "delete failed";
}