<?php
session_start();  // Start session
session_unset();  // Unset all session variables
session_destroy();  // Destroy the session

header('Location: index.php');  // Redirect to login page
exit;
?>
