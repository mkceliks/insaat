<?php
        include_once "../server.php";
        include_once "../session.php";

       

        if(isset($_POST['submit'])){
            
   
        $servis_ismi = $_POST['servis_ismi'];
        $servis_icerik = $_POST['servis_icerik'];
        
        $sql = "INSERT INTO servisler (servis_ismi, servis_icerik) VALUES ('$servis_ismi', '$servis_icerik')";
        
        if($conn->query($sql) == TRUE){
            echo "<script>alert('Ekleme başarılı.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=servisleri_goster.php");;
        }else{
            echo "<script>alert('Ekleme başarısız.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=servisleri_goster.php");; 
        }
    }
    else{
        echo "Post Başarısız";
    }


    

?>