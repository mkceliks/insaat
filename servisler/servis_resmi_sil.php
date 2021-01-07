<?php
# Resimleri cek

include_once "../server.php";
include_once "../session.php";




if(isset($_GET['servis_id'])){
    $servis_id = $_GET['servis_id'];

    $sql = "SELECT * FROM servisler WHERE servis_id ='$servis_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $isim = $row['servis_ismi'];
    $icerik = $row['servis_icerik'];
    $resimler = explode("* ", $row['servis_resimler']);

    $toplam = count($resimler)-1;
    $dizin = "../images/servisler";

    
    echo "<h3><center>Seçilen servis için resim silme</center></h3>";
    for($i=0; $i < $toplam; $i++){
        echo "
        
        <a href='servis_resmi_sil_arkaplan.php?servis_id=".$servis_id."&resim=".$resimler[$i]."' >
        <img onContextMenu='return false' src='".$dizin."/".$resimler[$i]."'
        width='150' height='200' border='2'></a>";
        }

        


}






?>