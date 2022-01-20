<?php
include '../layout/header.php';
?>
<div class="container">
    <div class="container row col-lg-12">
        <h1 class="display-6">Picture upload form</h1>
    </div>
    <form action="../scripts/upload.php" method="POST" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02" name="pictureToUpload">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="input-group mb-3">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>








<?php
include '../layout/footer.php';
?>