<?php
$targetDirectory = "documents/";

//periksa apakah direktory penyimpanan ada, jika tidak buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory,077, true);
}

if ($_FILES['file']['name'][0]) {
    $totalFiles = count($_FILES['file']['name']);

    //loop melalui semua file yang diunggah
    for ($i=0; $i < $totalFiles; $i++) { 
        $fileName = $_FILES['file']['name'][$i];
        $targetfile = $targetDirectory . $fileName;
        
        //pindahkan file yang diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['file']['tmp_name'][$i],$targetfile)){
            echo"File $fileName berhasil diunggah.<br>";
        }else {
            echo"Gagal mengunggah file $fileName. <br>";
        }
    }
}else{
    echo "Tidak ada file yang diunggah";
}
?>