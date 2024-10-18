<?php
if (isset($_FILES['file']['name'][0])) {
    for ($i=0; $i < count($_FILES['file']['name']); $i++) { 
        $errors = array();
        $file_name=$_FILES['file']['name'][$i];
        $file_size=$_FILES['file']['size'][$i];
        $file_type=$_FILES['file']['type'][$i];
        $file_tmp=$_FILES["file"]["tmp_name"][$i];
        @$file_ext=strtolower("".end(explode('.',$_FILES['file']['name'][$i])). "");
        $extensions=array("pdf","doc","docx","txt");
        if (in_array($file_ext, $extensions)===false) {
            $errors[]="Ekstensi file $file_name yang diizinkan adalah PDF, DOC, DOCX, atau TXT<br>";
        }
    
        if ($file_size>2097152) {
            $errors []= "ukuran file $file_name tidak boleh lebih dari 2mb<br>";
        }
    
        if (empty($errors)==true) {
            move_uploaded_file($file_tmp,"documents/". $file_name);
            echo"File $file_name berhasil diunggah.<br>";
        }else{
            echo implode("", $errors);
        }    
    }
}   
?>