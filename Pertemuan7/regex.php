<?php
    $pattern = '/[a-z]/';//mencocokkan huruf kecil
    $text = 'This is a Sample Text.';
    if (preg_match( $pattern, $text ) ) {
        echo'Huruf kecil ditemukan';
    } else {
        echo'Huruf kecil tidak ada';
    }

    echo"<br>";
    
    $pattern = '/[0-9]+/';
    $text = 'there are 123 apples.';
    if (preg_match  ( $pattern, $text, $matches ) ) {
        echo "Cocokkan: ". $matches[0];
    } else {
        echo"Tidak ada yang cocok!";
    }
   echo"<br>";

    $pattern = '/apple/';
    $replacement = 'banana';
    $text = 'i like apple pie.';
    $new_text=preg_replace($pattern,$replacement,$text);
    echo''. $new_text .'';

    echo"<br>";

    $pattern = '/go*d/';
    $text = 'god is good.';
    if (preg_match( $pattern, $text, $matches ) ) {
        echo 'Cocokkan: '. $matches[0];
    } else {
        echo 'Tidak ada yang cocok!';
    }

    echo"<br>";

    $pattern = '/go?d/';
    $text = 'god is good.';
    if (preg_match( $pattern, $text, $matches ) ) {
        echo 'Cocokkan: '. $matches[0];
    } else {
        echo 'Tidak ada yang cocok!';
    }

    echo"<br>";

    $pattern = '/go{1,2}d/';
    $text = 'god is good.';
    if (preg_match( $pattern, $text, $matches ) ) {
        echo 'Cocokkan: '. $matches[0];
    } else {
        echo 'Tidak ada yang cocok!';
    }
    
?>