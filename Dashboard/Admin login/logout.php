<?php
session_start(); // Start the session
session_destroy(); // Destroy the session to log out the user

// Redirect to "index.html" inside the "Dashboard" folder
header('Location: ../../Voter login Form/index.html');


 // Redirect to the dashboard.php file
exit(); // Stop further script execution
?>
