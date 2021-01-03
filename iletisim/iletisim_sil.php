<?php
        include_once "../server.php";
        include_once "../session.php";

        
        
        if(isset($_GET['iletisim_id'])){

        $silinecek_iletisim_id = $_GET['iletisim_id'];

        $sql = "DELETE FROM projeler WHERE pid= '$silinecek_iletisim_pid'";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>alert('Silme başarılı.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=iletisim.php");;
        }else{
            echo "<script>alert('Silme başarısız!!.Yönlendiriliyorsunuz lütfen bekleyiniz...')</script>" . header("Refresh: 3; url=iletisim.php");;
        }
    }
?>