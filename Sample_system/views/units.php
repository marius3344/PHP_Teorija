<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
include '../layout/header.php';

$meters = $miles = $km = $nautMiles = 0;

if($_POST){
    $meters = $_POST['meters'];
    $miles = $_POST['miles'];
    $km = $_POST['km'];
    $nautMiles = $_POST['nautMiles'];
    $counter = 0;
    foreach($_POST as $input){
        if($input>0){
            $counter++;
        }
    }
    if($counter>1){
        $meters = $miles = $km = $nautMiles = 0;
    }

    if((float)$meters>0){
        $miles = round(($meters * 0.000621371),4);
        $km = round(($meters * 0.001),4);
        $nautMiles = round(($meters * 0.00069957),4);
    } else if((float)$miles>0){
        $meters = round(($miles / 0.000621371),4);
        $km = round(($meters * 0.001),4);
        $nautMiles = round(($meters * 0.00069957),4);
    } else if((float)$km>0){
        $meters = round(($km / 0.001),4);
        $miles = round(($meters * 0.000621371),4);
        $nautMiles = round(($meters * 0.00069957),4);
    } else if((float)$nautMiles>0){
        $meters = round(($nautMiles / 0.00069957),4);
        $km = round(($meters * 0.001),4);
        $miles = round(($meters * 0.000621371),4);
    }
}




?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-header">
                    Units Converter
                </div>
                <div class="card-body">
                    <h5 class="card-title">Convert distance units</h5>
                    <form action="" method="POST">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="meters" style="min-width: 8rem">Meters</label>
                            <input type="number" class="form-control" name="meters" value="<?php echo $meters; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="miles" style="min-width: 8rem">Miles</label>
                            <input type="number" class="form-control" name="miles" value="<?php echo $miles; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="km" style="min-width: 8rem">Kilometers</label>
                            <input type="number" class="form-control" name="km" value="<?php echo $km; ?>">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="nautMiles" style="min-width: 8rem">Nautical Miles</label>
                            <input type="number" class="form-control" name="nautMiles"
                                value="<?php echo $nautMiles; ?>">
                        </div>

                        <div class="input-group justify-content-center">
                            <button class="btn btn-primary mr-3" type="submit" style="min-width: 8rem">Submit</button>
                            <button class="btn btn-primary" type="button" style="min-width: 8rem"
                                onclick="window.location.href=window.location.href">Clear</button>
                        </div>
                    </form>

                </div>
                <div class="card-footer text-muted">
                    More will be added!
                </div>
            </div>
        </div>


    </div>
</div>

<?php include '../layout/footer.php' ?>