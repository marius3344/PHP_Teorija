<?php 
require_once "config/Database.php";

$db = new Database;
$db->getConnection();



$title = "Home";

include "layout/header.php";

?>
<ul>
    <li><a href="views/user.create.php">User Create</a></li>
</ul>


<?php 
include "layout/footer.php";
?>