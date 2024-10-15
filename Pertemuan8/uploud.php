<?php
if (isset($_POST["submit"])) {
    $targetdir="uploads/";
    $targetfile=$targetdir . basename($_FILES["myFile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile,PATHINFO_EXTENSION));

    $allowedExtensions = array("txt","pdf","doc","docx");
    $maxsize = 1.8*1024*1024;
    

    if (in_array($fileType, $allowedExtensions) && $_FILES["myFile"]["size"] <= $maxsize) {
        if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetfile)){
            echo"File berhasil diunggah. <br>";
            // echo "<img src='".$targetfile."' style='max-width:200px;'><br>";
        }else {
            echo"Gagal mengunggah file";
        }
    }
    else {
        echo"File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>