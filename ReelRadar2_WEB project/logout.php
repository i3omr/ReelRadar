<?php
// Start session
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Ensure cookie is deleted by setting an expired date in the past
setcookie("PHPSESSID", "", time() - 3600, "/");
setcookie("user_login", "", 0, "/");

// Redirect to login page or any other appropriate page
header("Location: index.php"); // Adjust the redirection as per your application
exit();
?>