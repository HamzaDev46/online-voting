<?php
    session_start();
    session_destroy(); // Destroy all sessions
    header("Location: ../Voter Login Form/index.html"); // Redirect to the login page or homepage
    exit();
?>
