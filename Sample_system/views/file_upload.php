<?php
include '../layout/header.php';
?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
            <div class="card-header">
                Files Upload
            </div>
            <div class="card-body">
                <h5 class="card-title">Picture upload form</h5>
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
            <div class="card-footer text-muted">
                Sample of file uploading
            </div>
            </div>
        </div>
    </div>
</div>







<?php
include '../layout/footer.php';
?>