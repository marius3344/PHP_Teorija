<?php 
$title = "User Create";
include "../layout/header.php";
require "../config/Database.php";
require "../app/Controller/User.php";

$database = new Database;
$db = $database->getConnection();

$user = new User($db);

if ($_POST) {
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];

    if($user->create()) {
        echo "User created";
    } else {
        echo "Something went wrong";
    }

}



?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<input type="text" placeholder="Name" name="name">
<input type="email" placeholder="Email" name="email">
<input type="submit">
</form>




<?php 
include "../layout/footer.php";
?>