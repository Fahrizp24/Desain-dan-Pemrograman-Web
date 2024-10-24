<?php
include '../controller/koneksi.php';
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $namaLomba = $_POST['nama_lomba'];
    $waktu = $_POST['waktu'];
    $penyelenggara = $_POST['penyelenggara'];
    $bidang = $_POST['bidang'];
    $nimMahasiswa = $_POST['nim_mahasiswa'];
    $nipDosenPembimbing = $_POST['nim_dosen'];

    $cekMhs = "SELECT nama, nim FROM mahasiswa WHERE nim='$nimMahasiswa'";
    $cekDsn = "SELECT nama, nip FROM dosen WHERE nip='$nipDosenPembimbing'";    
    $hasilMhs = $conn->query($cekMhs);
    $hasilDsn = $conn->query($cekDsn);

    if ($hasilMhs->rowCount() != 0 && $hasilDsn->rowCount() != 0) {
        echo"Berhasil";
    }else if ($hasilMhs->rowCount() == 0 && $hasilDsn->rowCount() == 0) {
        echo"DosendanMahasiswa";
        exit();
    }else if($hasilMhs->rowCount() == 0) {
        echo"Mahasiswa";
        exit();
    }else if($hasilDsn->rowCount() == 0) {
        echo"Dosen";
        exit();
    }

    $sql = "INSERT INTO prestasi (namaLomba, waktu, penyelenggara, bidang, nimMahasiswa, nipDosenPembimbing)
    VALUES ('$namaLomba', '$waktu', '$penyelenggara', '$bidang', '$nimMahasiswa', '$nipDosenPembimbing')";

    $conn->query($sql);

}
?>
