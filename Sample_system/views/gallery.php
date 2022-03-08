<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
$title1=$title2=$title3=$title4=$color= "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_FILES['image1']['name']) && !empty($_FILES['image2']['name']) && !empty($_FILES['image3']['name']) && !empty($_FILES['image4']['name']) && !empty($_POST['imageTitle1']) && !empty($_POST['imageTitle2']) && !empty($_POST['imageTitle3']) && !empty($_POST['imageTitle4'])) {
        $counter = 1;
        //var_dump($_FILES);
        foreach ($_FILES as $image) {
            //echo "testas";
            $targetDir = "../uploads/";
            $imageName = "image" . $counter . ".jpg";
            $targetFile = $targetDir . basename($image['name']);
            //echo $targetFile;
            $uploadValid = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $targetFile = $targetDir . $imageName;
            $tempFile = $image['tmp_name'];
            //check if file is image
            $check = getimagesize($tempFile);
            if ($check !== false) {
                //echo "File is an image - ".$check['mime'];
            } else {
                //echo "File is not an image";
                include 'gallery_error.php';
                die;
                //$uploadValid = 0;
            }

            //limit file size
            // if ($_FILES['pictureToUpload']['size'] > 1000000) {
            //     echo "File is too large";
            //     $uploadValid = 0;
            // }

            //check if file extension is accepted
            $extensions = ["jpg"];

            if (in_array($imageFileType, $extensions) === false) {
                include 'gallery_error.php';
                die;
            }

            //upload file

            if (!move_uploaded_file($tempFile, $targetFile)) {
                include 'gallery_error.php';
                die;
            }
            $counter++;

        }
        $title1=$_POST['imageTitle1'];
        $title2=$_POST['imageTitle2'];
        $title3=$_POST['imageTitle3'];
        $title4=$_POST['imageTitle4'];
        $color = "bg-".$_POST['color'];
        include 'gallery_view.php';
    } else {
        //echo "tst";
        include 'gallery_error.php';
        die;
    }

} else {
    //echo "tst"
    include 'gallery_view.php';
}
