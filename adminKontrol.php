<?php include_once 'server.php'; ?>

    <?php 
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "deneme";

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT ID, sifre FROM admin WHERE ID = 'mkemal'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $id = $row["ID"];
    $sifre = $row["sifre"];

    
    
    $admin_giris_isim  = $_POST["adminID"];
    $admin_giris_sifre = $_POST["adminPassword"];

    if($admin_giris_isim == $id && $admin_giris_sifre == $sifre){ //md5 DB üzerinde bir şiferelemedir

       header('Location:adminAnaSayfa.html');


    }else{

        header('Location:adminError.php');

    }
    
    
    ?>
    
