<?php
        include_once "../server.php";
        include_once "../session.php";

        
   
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
            echo "<script>alert('Ekleme başarılı.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=veri_al.php");;
        }else{
            echo "<script>alert('Ekleme başarısız.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=veri_al.php");; 
        }


    

?>