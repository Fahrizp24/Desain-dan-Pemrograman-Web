<!DOCTYPE html>
<html lang="id">

<head>
    <link rel="stylesheet" href="../model/styleform.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../controller/jquery-3.7.1.js"></script>
    <script src="../controller/uploadform.js"></script> 
    <title>Daftar Prestasi</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <main>
        <h2>Form Pengisian Prestasi</h2>
        <form class="form-isi-prestasi" id="form-isi-prestasi" method="post" >
            <table>
                <div class="form-group">
                    <tr>
                        <td>
                            <label for="nama_lomba">Nama Lomba</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="nama_lomba" name="nama_lomba" required>
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                            <label for="waktu">Waktu</label>
                        </td>
                        <td>
                            <input type="date" class="form-control" id="waktu" name="waktu" required>
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                            <label for="penyelenggara">Penyelenggara</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" required>
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                            <label for="bidang">Bidang</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="bidang" name="bidang" required>
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                            <label for="nim_mahasiswa">NIM Mahasiswa</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="nim_mahasiswa" name="nim_mahasiswa" required>
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                            <label for="nim_dosen">Nim Dosen Pembimbing</label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="nim_dosen" name="nim_dosen" required>
                        </td>
                    </tr>
                </div>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="submit" id="submit">Kirim</button>
                    </td>
                </tr>
            </table>
            
        </form>
        <div id="status"></div>
    </main>
    <?php
    include 'footer.php';
    ?>
</body>

</html>
