<?php 
    session_start();
    if (!isset($_SESSION["user"])){
    //if (true){    
        header("Location:login.php");
    }    
?>