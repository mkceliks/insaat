<?php
# Resimleri cek

include_once "../server.php";
include_once "../session.php";




if(isset($_GET['pid'])){
    $pid = $_GET['pid'];

    $sql = "SELECT * FROM projeler WHERE pid='$pid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $isim = $row['p_ismi'];
    $icerik = $row['p_icerik'];
    $resimler = explode("* ", $row['p_resimler']);

    $toplam = count($resimler)-1;
    $dizin = "../images/projeler";

    

    for($i=0; $i < $toplam; $i++){
        echo "
        
        <a href='p_resim_sil_arkaplan.php?pid=".$pid."&resim=".$resimler[$i]."' >
        <img onContextMenu='return false' src='".$dizin."/".$resimler[$i]."'
        width='150' height='200' border='2'></a>";
        }

        


}






?>