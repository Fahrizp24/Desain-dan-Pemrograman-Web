<!DOCTYPE html>
<html lang="id">
<head>
    <script src="../controller/jquery-3.7.1.js"></script>
    <script src="../controller/hapus.js"></script> 
    <link rel="stylesheet" href="../model/styledaftarprestasi.css" type="text/css">
    <title>Daftar Prestasi</title>
</head>
<?php include 'header.php'; ?>
<?php include '../controller/koneksi.php'; ?>
<main>
    <h1>Daftar Prestasi Mahasiswa</h1>
    <div class="tableprestasi">
        <?php
        $query = "SELECT p.idPrestasi,p.namaLomba, p.waktu, p.penyelenggara, p.bidang, m.nama AS mahasiswa,d.nama AS dosen
        FROM prestasi p JOIN mahasiswa m ON p.nimMahasiswa=m.nim JOIN dosen d 
        ON p.nipDosenPembimbing=d.nip;";

        // Eksekusi query
        $stmt = $conn->query($query);
        // Ambil semua data dalam bentuk array asosiatif
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($results) > 0) {
        ?>
            <table class="formulir">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lomba</th>
                        <th>Waktu</th>
                        <th>Penyelenggara</th>
                        <th>Bidang</th>
                        <th>Nama Mahasiswa</th>
                        <th>Nama Dosen Pembimbing</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($results as $row) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $row['namaLomba'] . "</td>";
                        echo "<td>" . $row['waktu'] . "</td>";
                        echo "<td>" . $row['penyelenggara'] . "</td>";
                        echo "<td>" . $row['bidang'] . "</td>";
                        echo "<td>" . $row['mahasiswa'] . "</td>";
                        echo "<td>" . $row['dosen'] . "</td>";
                        echo "<td>
                        <form method='POST' id='form-delete' action='../controller/hapusdata.php'>
                        <input type='hidden' name='idPrestasi' value='" . $row['idPrestasi'] . "';'>
                        <button type='submit' name='delete' id='delete'>Delete</button>
                    </form>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } else {
            echo "tabel masih kosong";
        }
        ?>
    </div>
    <div id="status"></div>
</main>
<?php include 'footer.php'; ?>
</html>