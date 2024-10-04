<!DOCTYPE html>
<html>

<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="tugas.css">
    <script src="../jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            $(".klik").click(function() {
                $(".tabeldata").slideToggle("slow");
            });
        });
    </script>
</head>

<body>
    <?php
    $database = [
        ["Andi", 15, "10A", "Malang"],
        ["Siti", 16, "10B", "Batu"],
        ["Budi", 15, "10A", "Dinoyo"],
        ["Anton", 25, "15A", "Dinoyo"]
    ];

    function tampilkan(array $data)
    {
        echo "<table> <tr><th>Nama</th><th>Umur</th><th>Kelas</th><th>Alamat</th></tr>";
        foreach ($data as $key) {
            echo "<tr><td>" . $key[0] . "</td><td>" . $key[1] . "</td><td>" . $key[2] . "</td><td>" . $key[3] . "</td></tr>";
        }
        echo "</table>";
    }
    ?>

    <h2>Data Siswa</h2>
    <div class="tabel">
        <div class="klik">Click to show database</div>
        <hr>
        <div class="tabeldata">
           <?php tampilkan($database) ?>
        </div>
    </div>
</body>

</html>