<?php
session_start();

// Unset all of the session variables
$_SESSION = array($_SESSION['user_id']);

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: index.php");
exit;
?>
