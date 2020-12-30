<?php
        include_once "../server.php";

        session_start();
        ob_start();
        
        
        if(!isset($_SESSION["login"])){//Session kontrol
            header("Location:../adminError.php");
        }
   
        $silinecek_calisan_id = $_POST['id'];

        $sql = "DELETE FROM calisanlar WHERE id= '$silinecek_calisan_id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Silme başarılı." . "<a href = 'veri_al.php'> Tıkla </a>";
        }else{
            echo "Silme başarısız." . "<a href = 'veri_al.php'> Tıkla </a>";
        }

?>