<?php

$dbmail="marcel@gmail.com";
$dbpassword="12345";
$dbpasswordEncoded= password_hash($dbpassword,PASSWORD_DEFAULT);

$email = $_POST['email'];
$password = $_POST['password'];

if ($dbmail === $email && password_verify($password,$dbpasswordEncoded)) 
{
    session_start();
    $_SESSION['email'] = $email;
    
    header("Location:../panel.php");
}
else {
    echo "Invalid password";
}
