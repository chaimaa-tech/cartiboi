<?php
session_start(); // Start the session

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to login page (or home page)
header("Location: loginForm.php");
exit;
?>
