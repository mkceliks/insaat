<?php
        include_once "../server.php";
        include_once "../session.php";

        
   
        $c_isim = $_POST['c_isim'];
        
        $c_departman = $_POST['c_departman'];
        $c_yazi_baslik = $_POST['yazi_baslik'];
        
        $c_yazi = $_POST['yazi'];
       




        $sql = "INSERT INTO calisanlar (isim_soyad,departman,yazi_baslik, yazi) 
        VALUES ('$c_isim', '$c_departman', '$c_yazi_baslik', '$c_yazi')";

        $result = mysqli_query($conn, $sql);
        
        if($result){
            echo "<script>alert('Ekleme başarılı.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=veri_al.php");;
        }else{
            echo "<script>alert('Ekleme başarısız.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=veri_al.php");; 
        }


    

?>