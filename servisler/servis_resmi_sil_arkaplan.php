<?php
# Resimleri cek

include_once "../server.php";
include_once "../session.php";




if(isset($_GET)){
    $servis_id = $_GET['servis_id'];

    $resim = $_GET['resim'];

    $sql = "SELECT * FROM servisler WHERE servis_id='$servis_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $resimler = explode("* ", $row['servis_resimler']);
    $sayi = count($resimler)-1;

    for($i=0;$i<$sayi;$i++){
        if($resimler[$i] === $resim){
            break;
        }

    }
    unset($resimler[$i]);

    $resimler_son = implode("* ", $resimler);
    
    
    $sorgu = $conn->prepare("UPDATE servisler SET servis_resimler = ? WHERE servis_id = '$servis_id'");
        
    $sorgu->bind_param("s",$resimler_son);
    $sorgu->execute();
    if ($sorgu->affected_rows > 0) {
        echo "<br><p style='text-align:center;'>İşlem başarılı!!!<br></p>";
        header("Refresh: 2; url=servis_resmi_sil.php?pid=$pid");
        
    }else {

        echo "<br><p style='text-align:center;'>HATA!!<br></p>";
        header("Refresh: 2; url=servis_resmi_sil.php?pid=$pid");
    }  
    
    

    


}






?>