<?php
        include_once "../server.php";
        include_once "../session.php";

       

        if(isset($_POST['submit'])){
            
   
            $p_ismi = $_POST['p_ismi'];
            $p_icerik = $_POST['p_icerik'];
            
            $sql = "INSERT INTO projeler (p_ismi, p_icerik) VALUES ('$p_ismi', '$p_icerik')";
            
            if($conn->query($sql) == TRUE){
                echo "<script>alert('Ekleme başarılı.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=projeleri_al.php");;
            }else{
                echo "<script>alert('Ekleme başarısız.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=projeleri_al.php");; 
            }
    }
    else{
        echo "Post Başarısız";
    }


    

?>