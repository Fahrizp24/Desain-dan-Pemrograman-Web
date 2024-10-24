<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../controller/jquery-3.7.1.js"></script>
    <script src="../controller/login.js"></script> 
    <link rel="stylesheet" href="../model/stylelogin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include 'headerindex.php'; ?>
    <img style="width:100%; height:100%; position: fixed; top: 0; left: 0; 
    z-index: -1;filter: brightness(70%);" src="../asset/latar-polinema.png">
    <main>
        <div class="kata">
            <h2>Juara Polinema: Jelajahi Prestasi Tak Tertandingi Mahasiswa Polinema</h2>
            <p>Situs web Juara Polinema adalah bukti dari kerja keras dan Mahasiswa Polinema
                menampilkan koleksi prestasi yang komprehensif yang telah mengharumkan nama 
                Politeknik Negeri Malang. Jadilah bagian dari perjalanan kami menuju keunggulan. </p>
        </div>
        <form id="login-form" method="post">
        <table class="form-login">
            <tr>
                <td><Label for="username">Username</Label></td>
                <td><input type="text" name="username" id="username" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" name="submit" id="submit">Login</button></td>
            </tr>
            <tr>
                <td colspan="2"><div id="status"></div></td>
            </tr>
        </table>
    </form>
        </div>
    </main>
</body>
<?php include 'footer.php'; ?>
</html>