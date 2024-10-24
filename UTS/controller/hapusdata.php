<?php
include '../controller/koneksi.php';
if (isset($_POST['idPrestasi'])) {
    $idPrestasi = $_POST['idPrestasi'];

    $sql = "DELETE FROM prestasi WHERE idPrestasi = :idPrestasi";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':idPrestasi', $idPrestasi, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: ../view/daftarPrestasi.php");
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
} else {
    echo "ID Prestasi tidak ditemukan.";
}
?>