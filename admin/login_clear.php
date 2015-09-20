<?php 
    header("Location:login.php");
    session_start();
    if (isset($_SESSION["user"])){
        unset($_SESSION["user"]);
    }
　　　//header("Location:login.php");
?>