<?php

// print_r($_POST);

foreach ($_POST as $key => $val) // Get the password from the input name "password"
{
 ${$key} = $val; 
}

// $user = $_POST['user']; // Get the user from the input name "user" 
// $email = $_POST['email'];// Get the email from the input name "email"
// $password = $_POST['password'];// Get the password from the input type "password"

echo "My username is $user and my email is $email and password is $password" ;