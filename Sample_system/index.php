<?php
include 'layout/header.php';

header("Location: views/login.php");

// $usernameValue = $emailValue = $passError = "";
// if ($_GET) {
//     $usernameValue = $_GET['username'];
//     $emailValue = $_GET['email'];
//     $passError = $_GET['error'];
// }

?>

<!-- <div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Please fill registration form!</h2>
            <form action="scripts/register.php" method="POST">
                <div class="form-floating my-2">
                    <input type="text" name="username" class="form-control" required
                        value="<?php echo $usernameValue ?>">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating my-2">
                    <input type="email" class="form-control" name="email" required value="<?php echo $emailValue ?>">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating my-2">
                    <input type="password" name="password" class="form-control" required>
                    <label for="password">Password</label>
                </div>
                <div class="form-floating my-2">

                    <input type="password" name="confirmPassword" class="form-control" required>
                    <span class="badge bg-danger"><?php echo $passError ?></span>
                    <label for="confirmPassword">Confirm Password</label>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Register</button>
            </form>
        </div>
    </div>
</div> -->

<?php include 'layout/footer.php' ?>