<?php
        include_once "../server.php";

        session_start();
        ob_start();
        
        
        if(!isset($_SESSION["login"])){//Session kontrol
            header("Location:../adminError.php");
        }
   
        $c_isim = $_POST['c_isim'];
        $c_e_posta = $_POST['c_e_posta'];
        $c_facebook = $_POST['c_facebook'];
        $c_twitter = $_POST['c_twitter'];
        $c_instagram = $_POST['c_instagram'];
        $c_departman = $_POST['c_departman'];
        $c_telefon = $_POST['c_telefon'];
        
        $c_adres = $_POST['c_adres'];




        $sql = "INSERT INTO calisanlar (isim_soyad,e_posta,facebook,twitter,instagram,departman,telefon, adres) 
        VALUES ('$c_isim', '$c_e_posta', '$c_facebook', '$c_twitter', '$c_instagram', '$c_departman', '$c_telefon', '$c_adres')";

        $result = mysqli_query($conn, $sql);
        
        if($result){
            echo "Ekleme başarılı." . "<a href = 'veri_al.php'> Tıkla </a>";
        }else{
            echo "Ekleme başarısız.";
        }


    

?>