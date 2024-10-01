
<?php 
function perkenalan($nama, $salam){
    echo"$salam, ";
    echo"Perkenalkan, nama saya $nama <br/>";
    echo "Senang berkenalan dengan Anda <br/>";
}

perkenalan("Hamdana","Hello");
echo "<hr>";
$saya = "Fahri";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya,$ucapanSalam);
?>
