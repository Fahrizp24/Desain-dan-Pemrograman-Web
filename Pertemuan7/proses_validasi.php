<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors_=array();

    //validasi nama
    if (empty($nama)) {
        $errors[]="nama harus diisi";
    }

    if (empty($email)) {    
        $errors[]= "email harus diisi";
    }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errors[]= "Format email tidak valid.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo"".$error."<br>";
        }
    }else {
        //lanjutkan dengan pemrosesan data jika semua validasi berhasil
        //misal, menyimpan data ke database atau mengirim email
        echo"Data berhasil dikirim! <br> nama=$nama, email=$email";
    }
}
?>