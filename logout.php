<?php 
	session_start();
    // unset($_SESSION["email"]);
    // unset($_SESSION["name"]);
    session_unset();
    session_destroy();
    header("location:index.php");
?>