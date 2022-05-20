<?
// Start session
session_start();

$username = $_SESSION["username"];
$email = $_SESSION["email"];

echo "<p>Username is $username.</p>";
echo "<p>Email is $email</p>";

?>