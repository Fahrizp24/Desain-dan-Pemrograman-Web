<?php
$input = $_POST['input'];
$input = htmlspecialchars($input,ENT_QUOTES,'UTF-8');
echo''.$input."<br>";

$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo $email;
} else {
    echo 'Email tidak valid';
}


?>