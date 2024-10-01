<?php 
$loremIpsum = " lorep ipsum awdaawdawd  adwawdawdawd awdawdawd
                awdawdkawdkawkd cakakwkkwe adawdawdawdawd  operuad.
                appijmeunw. eptajjdiwanwadjwdadwa";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter : " . strlen( $loremIpsum ) ."<br>";
echo "Panjang Kata : ". str_word_count( $loremIpsum ) ."<br>";
echo "<p>". strtoupper( $loremIpsum ) ."</p>";
echo "<p>". strtolower( $loremIpsum ) ."</p>";
?>