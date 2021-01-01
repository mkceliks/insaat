<?php
        include_once "../server.php";
        include_once "../session.php";

        
        
        if(isset($_GET['ID'])){

        $silinecek_calisan_id = $_GET['ID'];

        $sql = "DELETE FROM calisanlar WHERE id= '$silinecek_calisan_id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>alert('Silme başarılı.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=veri_al.php");;
        }else{
            echo "<script>alert('Silme başarısız!!.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=veri_al.php");;
        }
    }
?>