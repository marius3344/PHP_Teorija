<!-- <pre> -->
<?php
// var_dump($_POST);
// echo "<br>";
// var_dump($_FILES);
//print_r($_FILES['avatar']['size']);
$fname = $lname = $email = $password = $confirmPassword = "";
$fileDir = "../uploads/";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // vykdom koda
    if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmPassword']) && !empty($_FILES['avatar']['name'])) {
        //todo code

        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        if ($password === $confirmPassword) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            //patikrinam failo tima pvz paveiksleli ar ne
            //patikrinam failo dydi
            //patikrinam failo extension
            $fileName = $_FILES['avatar']['name'];
            $tempName = $_FILES['avatar']['tmp_name'];
            $uploadDir = $fileDir . "failas.jpg"; // c/pictures/mypicture/failas.jpg galima nurodyti kokiu pavadinimu ikelti faila
            if (!move_uploaded_file($tempName, $uploadDir)) {
                echo "ERROR";
            }
        } else {
            header("Location: ../views/register.php");
        }
    } else {
        header("Location: ../views/register.php");
    }
} else {
    header("Location: ../views/register.php");
}

?>

<table class="table">
    <tr>
        <th>Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Avatar</th>
    </tr>
    <tr>
        <td><?php echo $fname ?></td>
        <td><?php echo $lname ?></td>
        <td><?php echo $email ?></td>
        <td><img src="<?php echo $uploadDir ?>" alt="" onerror="this.style.display='none'"></td>
    </tr>
</table>