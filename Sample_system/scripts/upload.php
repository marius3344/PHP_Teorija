<?php
if (isset($_FILES['pictureToUpload'])) {
    $targetDir = "../uploads/";
    var_dump($_FILES);
    $targetFile = $targetDir . basename($_FILES['pictureToUpload']['name']); //nera failo
    echo $targetFile;
    $uploadValid = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $tempFile = $_FILES['pictureToUpload']['tmp_name']; //yra failas
    //check if file is image
    $check = getimagesize($tempFile);
    if ($check !== false) {
        //echo "File is an image - ".$check['mime'];
    } else {
        echo "File is not an image";
        $uploadValid = 0;
    }

    //check if file exists
    if (file_exists($targetFile)) {
        echo "File already exists!";
        $uploadValid = 0;
    }

    //limit file size
    if ($_FILES['pictureToUpload']['size'] > 1000000) {
        echo "File is too large";
        $uploadValid = 0;
    }

    //check if file extension is accepted
    $extensions = ["jpeg", "jpg", "png"];

    if (in_array($imageFileType, $extensions) === false) {
        echo "Only jpeg, jpg, png files are allowed";
        $uploadValid = 0;
    }

    //upload file

    if ($uploadValid == 0) {
        echo "File is not uploaded";
    } else {
        if (move_uploaded_file($_FILES['pictureToUpload']['tmp_name'], $targetFile)) { // $targetFile - failas yra, $tempFile - failo nebera.
            echo "File was uploaded";
        } else {
            echo "Error occured, please try again";
        }
    }

}

?>

<img src="<?php echo $targetFile; ?>" alt="">