<?php 
$id = isset($_GET['id']) ? $_GET['id'] : die("ERROR: no User ID");
$title = "User Edit";
include "../layout/header.php";
require "../config/Database.php";
require "../app/Controller/User.php";

$database = new Database;
$db = $database->getConnection();

$user = new User($db);
$user->id = $id;
$user->getOne();

if($_POST){
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];

    if($user->update()){
        echo "User updated";
    } else {
        echo "Update failed";
    }
}


?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?id={$id}");?>" method="POST">
<input type="text" placeholder="Name" name="name" value="<?php echo $user->name; ?>">
<input type="email" placeholder="Email" name="email" value="<?php echo $user->email; ?>">
<input type="submit" value="Update User">
</form>




<?php 
include "../layout/footer.php";
?>