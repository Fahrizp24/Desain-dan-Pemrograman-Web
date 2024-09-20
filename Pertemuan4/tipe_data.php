<?php
$a=10;
$b=5;
$c=$a+5;
$d=$b+(10*5);
$e=$d-$c;

echo"Variabel a: {$a} <br>";
echo"Variabel b: {$b} <br>";
echo"Variabel c: {$c} <br>";
echo"Variabel d: {$d} <br>";
echo"Variabel e: {$e} <br>";

var_dump($e);
echo"<br>";
echo"<br>";

$nilaiMatematika=5.1;
$nilaiIpa=6.7;
$nilaiBahasaIndonesia=9.3;

$rataRata = ($nilaiMatematika+$nilaiIpa+$nilaiBahasaIndonesia)/3;
echo"Matematika: {$nilaiMatematika}<br>";
echo"Ipa: {$nilaiIpa}<br>";
echo"Bahasa Indonesia: {$nilaiBahasaIndonesia}<br>";
echo"rataRata: {$rataRata}<br>";
var_dump($rataRata);
echo"<br>";

$apakahSiswaLulus=true;
$apakahSiswaSudahUjian=false;
echo"<br>";
var_dump($apakahSiswaSudahUjian );
echo "<br>";
echo "<br>";

$namaDepan="Ibnu";
$namaBelakang="Jakaria";

$namaLengkap="{$namaDepan} {$namaBelakang}";
$namaLengkap2=$namaDepan . ' '.$namaBelakang;
echo"Nama Depan: {$namaDepan}<br>";
echo'Nama Belakang: '. $namaBelakang . '<br>';

$listMahasiswa = ["Wahid Abdullah","Elmo Bachtiar","Lendis Fabri"];
echo $listMahasiswa[0];
?>