<?php
        include_once "../server.php";
        include_once "../session.php";

        
        
        if(isset($_GET['servis_id'])){

        $silinecek_servis = $_GET['servis_id'];

        $sql = "DELETE FROM servisler WHERE servis_id= '$silinecek_servis'";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>alert('Silme başarılı.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=servisleri_goster.php");;
        }else{
            echo "<script>alert('Silme başarısız!!.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=servisleri_goster.php");;
        }
    }
?>