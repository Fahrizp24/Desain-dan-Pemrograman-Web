<?php  
include '../controller/koneksi.php';
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $nama = $_POST['username'];
    $nim = $_POST['password'];
    $sql = "SELECT nama, nim FROM mahasiswa WHERE nama='$nama' AND nim='$nim'";
    
    $result = $conn->query($sql);


    if ($result->rowCount() != 0) {
        echo"berhasil";
    } else {
        $result=$aw;
    }

}else{
    echo"gagal mengirim data";
}
