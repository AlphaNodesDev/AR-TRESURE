<?php 
    session_start();
if(!isset($_SESSION["username"])){
      header("location: login.php");
} 
$username = $_SESSION["username"];
$email = $_SESSION["email"];
?>