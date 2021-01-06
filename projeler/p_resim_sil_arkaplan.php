<?php
# Resimleri cek

include_once "../server.php";
include_once "../session.php";




if(isset($_GET)){
    $pid = $_GET['pid'];

    $resim = $_GET['resim'];

    $sql = "SELECT * FROM projeler WHERE pid='$pid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $resimler = explode("* ", $row['p_resimler']);
    $sayi = count($resimler)-1;

    for($i=0;$i<$sayi;$i++){
        if($resimler[$i] === $resim){
            break;
        }

    }
    unset($resimler[$i]);

    $resimler_son = implode("* ", $resimler);
    
    
    $sorgu = $conn->prepare("UPDATE projeler SET p_resimler = ? WHERE pid = '$pid'");
        
    $sorgu->bind_param("s",$resimler_son);
    $sorgu->execute();
    if ($sorgu->affected_rows > 0) {
        echo "<br><p style='text-align:center;'>İşlem başarılı!!!<br></p>";
        header("Refresh: 2; url=proje_resmi_sil.php?pid=$pid");
        
    }else {

        echo "<br><p style='text-align:center;'>HATA!!<br></p>";
        header("Refresh: 2; url=proje_resmi_sil.php?pid=$pid");
    }  
    
    

    


}






?>