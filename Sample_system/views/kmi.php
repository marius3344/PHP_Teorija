<?php include '../layout/header.php';

$result = "Your KMI will be here!";
$color = "primary";

$weight = $height = 0;

if($_GET){
    $weight = $_GET['weight'];
    $height = $_GET['height'];
    $result = (float)((int)$weight/((int)$height/100)**2);
    if($result<18.5 || $result>25){
        $color = "danger";
    } else {
        $color = "success";
    }
}



?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header">
                    KMI Calculator
                </div>
                <div class="card-body">
                    <h5 class="card-title">Calculate your KMI!</h5>
                    <form action="" method="GET">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="weight">
                            <label class="input-group-text" for="weight">Weight, kg</label>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="height">
                            <label class="input-group-text" for="height">Height, cm</label>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                    <div class="alert alert-<?php echo $color;?>" role="alert">
                        <?php echo $result; ?>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    Please interpret results only with your doctor or dietist
                </div>
            </div>
        </div>


    </div>
</div>

<?php include '../layout/footer.php' ?>