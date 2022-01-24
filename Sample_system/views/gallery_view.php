<?php 
include '../layout/header.php';


?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card <?php echo $color; ?>">
                <img class="card-img-top" src="http://localhost/PHP_teorija/sample_system/uploads/image1.jpg" alt="image1" onerror="this.style.display='none'">
                <div class="card-body">
                    <p class="card-text"><?php echo $title1; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card <?php echo $color; ?>">
                <img class="card-img-top" src="http://localhost/PHP_teorija/sample_system/uploads/image2.jpg" alt="image2" onerror="this.style.display='none'">
                <div class="card-body">
                    <p class="card-text"><?php echo $title2; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card <?php echo $color; ?>">
                <img class="card-img-top" src="http://localhost/PHP_teorija/sample_system/uploads/image3.jpg" alt="image1" onerror="this.style.display='none'">
                <div class="card-body">
                    <p class="card-text"><?php echo $title3; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card <?php echo $color; ?>">
                <img class="card-img-top" src="http://localhost/PHP_teorija/sample_system/uploads/image4.jpg" alt="image4"onerror="this.style.display='none'">
                <div class="card-body">
                    <p class="card-text"><?php echo $title4; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../layout/footer.php';
?>