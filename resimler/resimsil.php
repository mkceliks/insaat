<?php
        include_once "../server.php";
        include_once "../session.php";

        
        
        if(isset($_GET['yol'])){

        $silinecek_yol = $_GET['yol'];

        $sql = "DELETE FROM resimler WHERE r_yol= '$silinecek_yol'";
        $result = mysqli_query($conn, $sql);

        if($result){
            unlink("{$silinecek_yol}");
            echo "<script>alert('Silme başarılı.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=tum_resimleri_goster.php");;
        }else{
            echo "<script>alert('Silme başarısız!!.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=tum_resimleri_goster.php");;
        }
    }
?>