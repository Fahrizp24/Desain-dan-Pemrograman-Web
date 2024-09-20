<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br><br>";
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br><br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "<br><br>";
echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";
$nilaiSiswa = [85, 92, 58, 64, 90,55,88,79,70,96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai<60) {
        echo"Nilai: $nilai (tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo"<br>";
?>

<p>Ada soal cerita : Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. 
    Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. 
    Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.
</p>

<?php

echo "Nilai siswa yang sudah diurutkan:";
rsort($nilaiSiswa);
echo "Daftar nilai siswa setelah diurutkan: " . implode(', ', $nilaiSiswa);
array_splice($nilaiSiswa,0,2);
array_splice($nilaiSiswa,count($nilaiSiswa),2);
$rataRata=0;
foreach ($nilaiSiswa as $nilai) {
    $rataRata += $nilai;
}
echo"<br><br>";

$rataRata/=count($nilaiSiswa);
echo "Siswa dengan nilai yang melebihi rata rata: ";
foreach ($nilaiSiswa as $nilai) {
    if ($nilai>$rataRata) {
        echo"$nilai, ";
    }
}

?>

<p>Ada soal cerita : Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. 
    Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. 
    Bantu pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon.
</p>

<?php
$harga=120000;
$diskon=0.8;
if ($harga>100000) {
    $harga*=$diskon;
}
echo"Harga yang harus dibayar setelah mendapatkan diskon $harga";
?>

<p>Ada soal cerita : Seorang pemain game ingin menghitung total skor mereka dalam permainan. 
    Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. 
    Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”
</p>

<?php
$poin = 550;
$hadiahTambahan = ($poin>500) ? "YA": "TIDAK";

echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>