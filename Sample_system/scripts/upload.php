<?php
$targetDir = "../uploads";
$targetFile = $targetDir.basename($_FILES['pictureToUpload']['name']);
$uploadValid = 1;
$imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));



?>