<?php 
    session_start();
    session_unset();
    session_destroy();
    echo 'You are Logged out!!! <a href="login.php">Login Again</a>';
?>