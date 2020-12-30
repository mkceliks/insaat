<?php include_once 'server.php'; ?>

    <?php 
    
    

    
    ob_start();
    session_start();

    $admin_giris_isim  = $_POST["adminisim"];
    $admin_giris_sifre = $_POST["adminPassword"];

    
    $sql = "SELECT isim, sifre FROM admin WHERE isim='$admin_giris_isim' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    
    $isim = $row["isim"];
    $sifre = $row["sifre"];
    

    
    
    

    if($admin_giris_isim == $isim && md5($admin_giris_sifre) == $sifre){ //md5 DB üzerinde bir şiferelemedir
        

        $_SESSION["login"] = 'true';
        $_SESSION["isim"] = $isim;
        $_SESSION["sifre"] = $sifre;

       header('Location:adminAnaSayfa.php');


    }else{

        header('Location:adminError.php');

    }
    
    
    ?>
    
