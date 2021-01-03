<?php
        include_once "../server.php";
        include_once "../session.php";

        
        
        if(isset($_GET['pid'])){

        $silinecek_proje_pid = $_GET['pid'];

        $sql = "DELETE FROM projeler WHERE pid= '$silinecek_proje_pid'";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>alert('Silme başarılı.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=projeleri_al.php");;
        }else{
            echo "<script>alert('Silme başarısız!!.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=projeleri_al.php");;
        }
    }
?>