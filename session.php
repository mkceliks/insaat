<?php 

session_start();
ob_start();


if(!isset($_SESSION["login"])){//Session kontrol
    header("Location:adminError.php");
}

?>